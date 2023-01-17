<?php
  require_once "HandlerBase.php";
  require_once __DIR__ . "/../../component/Renderer.php";

  class Acknowledgements extends HandlerBase
  {
    public function handle()
    {
      self::serveView("Acknowledgements - Natty", "Acknowledgements");
    }
  }
?>
