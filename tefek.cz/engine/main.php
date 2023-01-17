<?php
    if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
    {
        $protocol = 'https://';
    }
    else
    {
        $protocol = 'http://';
    }

    $GLOBALS["name"] = "Tefek / Natty";
    $GLOBALS["version"] = "3.0";
    $GLOBALS["html_comment"] = "<!-- Tefek's site v{$GLOBALS["version"]}. Found a bug? Send me a report over to tefek32(at)gmail.com -->";

    $GLOBALS["root"] = $protocol.$_SERVER["HTTP_HOST"];

    $GLOBALS["shared_head"] = $_SERVER["DOCUMENT_ROOT"]."/engine/sharedhead.php";

    $GLOBALS["header"] = $_SERVER["DOCUMENT_ROOT"]."/engine/header.php";
    $GLOBALS["footer"] = $_SERVER["DOCUMENT_ROOT"]."/engine/footer.php";
    $GLOBALS["menu"] = $_SERVER["DOCUMENT_ROOT"]."/engine/menu.php";
?>
