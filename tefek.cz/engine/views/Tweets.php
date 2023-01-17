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
          My Twitter
        </span>
        <div class="mint-card-content">
          <a class="twitter-timeline" data-dnt="true" data-theme="dark" href="https://twitter.com/AMTefek?ref_src=twsrc%5Etfw">Tweets by 493msi</a>
          <script async src="https://platform.twitter.com/widgets.js" onload="document.getElementById('blockedNote').style.display = 'none';" charset="utf-8"></script>
          <div id="blockedNote">
            <p>
              <i>
                If you do not see a Twitter feed here, your browser settings may be blocking social site scripts.
                Feel free to click the link above in this case.
              </i>
            </p>
            <p>
              <i>
                This is usually caused by disabled JavaScript or browser extensions blocking 3rd party trackers.
                This is your privacy choice and I respect that.
              </i>
            </p>
          </div>
        </div>
      </div>
    </div>
    <?php
      Renderer::render("Footer");
    ?>
</body>
</html>
