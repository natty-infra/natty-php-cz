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
              About Botdiril
            </span>
            <div class="mint-card-content">
              <p>
                Botdiril is an open source Discord bot developed in Java (specifically using the JDA library).
                It offers various functions and I try to keep improving it.
                Currently, my goal is to make it more scalable and future-proof.
              </p>
            </div>
        </div>
        <div class="mint-solo-card mint-colorscheme-secondary-bg">
            <span class="mint-card-heading">
              Botdiril's Website
            </span>
            <div class="mint-card-content">
              <p>
                Botdiril's website is under construction. Once the site is ready, it will be available via the link below.
              </p>
              <a href="https://botdiril.com/" class="mint-link">Botdiril's Website</a>
            </div>
        </div>
        <div class="mint-solo-card mint-colorscheme-secondary-bg">
            <span class="mint-card-heading">
              Can I invite Botdiril to my server?
            </span>
            <div class="mint-card-content">
              <p>
                <a href="https://botdiril.com">Absolutely!</a>
              </p>
              However, I will need to find a way to maintain the bot and pay for the server.
              This will most likely involve optional donations or a different way of crowdfunding.
            </div>
        </div>
    </div>
    <?php
      Renderer::render("Footer");
    ?>
</body>
</html>
