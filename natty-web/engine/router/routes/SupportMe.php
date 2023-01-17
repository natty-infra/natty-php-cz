<?php
    require_once "HandlerBase.php";
    require_once __DIR__ . "/../../component/Renderer.php";

    class SupportMe extends HandlerBase
    {
        public function handle()
        {
            self::serveView("Support Natty", "SupportMe");
        }
    }
?>
