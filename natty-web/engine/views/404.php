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
    <div class="content">
      <div class="mint-solo-card mint-colorscheme-secondary-bg">
        <span class="mint-card-heading">
          Error 404 - Not Found
        </span>
        <div class="mint-card-content">
          Sorry, but this page could not be found on this site.<br />
          Please double-check your URL.<br />
          If a link from this site lead you here, contact me please.<br />
          <a href="<?=Router::link("contact")?>" class="mint-link">Contact me</a>
        </div>
      </div>
    </div>
  </div>
  <?php
    Renderer::render("Footer");
  ?>
  </body>
</html>
