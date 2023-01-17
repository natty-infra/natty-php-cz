<?php
  require_once "HandlerBase.php";
  require_once __DIR__ . "/../../component/Renderer.php";

  class NotFoundHandler extends HandlerBase
  {
    public function handle()
    {
      self::serveView("Not Found - Natty", "404");
    }
  }
?>
