<?php
  require_once "HandlerBase.php";
  require_once __DIR__ . "/../../component/Renderer.php";

  class Botdiril extends HandlerBase
  {
    public function handle()
    {
      self::serveView("Botdiril - Natty", "Botdiril");
    }
  }
?>
