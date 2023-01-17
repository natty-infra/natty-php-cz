<?php
  abstract class HandlerBase
  {
    private static string $viewDir = __DIR__ . "/../../views";
    private static string $stylesheetDir = "/style/custom";

    public static function getStylesheetDir()
    {
      return $GLOBALS["root"] . self::$stylesheetDir;
    }

    public static function serveView($pageTitle, $viewName)
    {
      $dir = self::$viewDir;
      $GLOBALS["title"] = $pageTitle;
      include "$dir/$viewName.php";
    }

    public static function importStyle($stylesheet)
    {
      if (!isset($GLOBALS["stylesheets"]))
      {
        $GLOBALS["stylesheets"] = [];
      }

      $dir = self::getStylesheetDir();
      $GLOBALS["stylesheets"][] = "$dir/$stylesheet.css";
    }

    public abstract function handle();
  }
?>
