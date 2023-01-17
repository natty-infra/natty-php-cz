<?php
  require_once "HandlerBase.php";
  require_once __DIR__ . "/../../component/Renderer.php";

  class Projects extends HandlerBase
  {
    public function handle()
    {
      self::serveView("Natty's Projects", "Projects");
    }
  }
?>
