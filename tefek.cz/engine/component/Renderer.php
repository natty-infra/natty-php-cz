<?php
  class Renderer
  {
    private static string $_componentsDir = "components/";

    public static function render($componentName, ...$argList)
    {
      $componentClassFile = self::$_componentsDir . $componentName . ".php";

      if(!file_exists(stream_resolve_include_path($componentClassFile)))
      {
        echo "<!--{$componentName}-->";
        return;
      }

      require_once $componentClassFile;
      $component = new $componentName();
      $component->render($argList);
    }
  }
?>
