<?php
    require "./engine/main.php";
    require "./engine/router/routes.php";

    $url = $_GET["url"] ?? "";

    Router::handle($url);
?>
