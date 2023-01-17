<?php
  require_once "HandlerBase.php";
  require_once __DIR__ . "/../../component/Renderer.php";

  class AboutMe extends HandlerBase
  {
    public function handle()
    {
      self::serveView("About Tefek", "AboutMe");
    }
  }
?>
