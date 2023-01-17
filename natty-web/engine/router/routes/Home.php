<?php
  require_once "HandlerBase.php";
  require_once __DIR__ . "/../../component/Renderer.php";

  class Home extends HandlerBase
  {
    public function handle()
    {
      self::importStyle("home-mint");
      self::serveView("Natty", "Home");
    }
  }
?>
