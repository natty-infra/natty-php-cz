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
                Contact me
            </span>
            <div class="mint-card-content">
                The easiest way to contact me is to join my Discord server.<br />
                <a href="https://discord.gg/sAAnDfWTav" class="mint-link">Join Server</a>
            </div>
            <div class="mint-card-content">
                You can send me an email to <b>493msi(at)gmail.com</b>.
            </div>
        </div>
        <div class="mint-solo-card mint-colorscheme-secondary-bg">
            <span class="mint-card-heading">
                Bug report
            </span>
            <div class="mint-card-content">
                In case you have a bug you would like to submit, please send me an email to <b>493msi(at)gmail.com</b> or <b>tefek32(at)gmail.com</b>.
                Include the important information like URL, reproduction steps and what happens. Thanks in advance.
            </div>
        </div>
    </div>
    <?php
      Renderer::render("Footer");
    ?>
</body>
</html>
