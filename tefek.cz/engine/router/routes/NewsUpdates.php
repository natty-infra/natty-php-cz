<?php
  require_once "HandlerBase.php";
  require_once __DIR__ . "/../../component/Renderer.php";

  class NewsUpdates extends HandlerBase
  {
    public function handle()
    {
      self::serveView("News and Updates - Tefek", "NewsUpdates");
    }
  }
?>
