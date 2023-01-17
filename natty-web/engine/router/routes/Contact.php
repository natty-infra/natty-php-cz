<?php
  require_once "HandlerBase.php";
  require_once __DIR__ . "/../../component/Renderer.php";

  class Contact extends HandlerBase
  {
    public function handle()
    {
      self::serveView("Contact Natty", "Contact");
    }
  }
?>
