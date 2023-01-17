<?php
  abstract class HandlerType
  {
    const View = 0;
    const Redirect = 1;
  }

  class Handler
  {
    public string $value;
    public int $type;

    function __construct($value, $type)
    {
      $this->value = $value;
      $this->type = $type;
    }
  }

  abstract class Router
  {
    private static string $_routesDir = __DIR__ . "/routes/";
    private static array $_routes = array();
    private static Handler $_default;

    public static function init(Handler $notFoundHandler): void
    {
      self::$_default = $notFoundHandler;
    }

    public static function map(string | array $route, string $mapping, int $handlerType): void
    {
      if (is_array($route))
      {
        foreach ($route as $r)
        {
          self::map($r, $mapping, $handlerType);
        }

        return;
      }

      if (array_key_exists($route, self::$_routes))
      {
        throw new Exception("Duplicate Router entry!");
      }

      self::$_routes[$route] = new Handler($mapping, $handlerType);
    }

    public static function handle($route): void
    {
      $handler = self::$_routes[$route] ?? self::$_default;

      switch ($handler->type)
      {
        case HandlerType::View:
          {
            require_once self::$_routesDir . "$handler->value.php";
            $handler = new $handler->value();
            $handler->handle();
          }
          break;

        case HandlerType::Redirect:
          header("Location: $handler->value");
          break;

        default:
          break;
      }
    }

    public static function link($route): string
    {
      return $GLOBALS["root"] . "/" . $route;
    }
  }
?>
