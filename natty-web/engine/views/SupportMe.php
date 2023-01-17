<?php
    echo $GLOBALS["html_comment"];
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            Renderer::render("SharedHead");
        ?>
    </head>
    <body>
        <?php
            Renderer::render("Header");
            Renderer::render("Menu");
        ?>
        <div class="content">
            <div class="mint-solo-card mint-colorscheme-secondary-bg">
                <span class="mint-card-heading">
                  Support me
                </span>
                <div class="mint-card-content">
                    <p>
                        If you have some disposable income and like what I do, please consider financially supporting me:
                    </p>
                    <ul>
                        <li>PayPal: <a href="https://paypal.me/tefek">paypal.me</a></li>
                        <li>Patreon: <a href="https://patreon.com/tefek">Patreon</a></li>
                    </ul>
                    <p>
                        Every little bit helps, thanks.
                    </p>
                </div>
            </div>
        </div>
        <?php
            Renderer::render("Footer");
        ?>
    </body>
</html>