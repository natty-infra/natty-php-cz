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
    Renderer::render("Menu");
  ?>
  <div class="content">
    <div class="mint-home-fsbg">
      <div class="mint-home-header">
        <div>
          <div class="mint-home-title">
            Tefek's Homepage
          </div>
          <div class="mint-home-cardset">
            <a href="<?=Router::link("botdiril")?>">
              <div class="mint-home-card">
                <div class="mint-home-card-title">
                  Botdiril
                </div>
                <div class="mint-home-card-description">
                  Currently my main project.
                </div>
              </div>
            </a>
            <a href="<?=Router::link("aboutme")?>">
              <div class="mint-home-card">
                <div class="mint-home-card-title">
                  About Me
                </div>
                <div class="mint-home-card-description">
                  Who even is Tefek?
                </div>
              </div>
            </a>
            <a href="<?=Router::link("projects")?>">
              <div class="mint-home-card">
                <div class="mint-home-card-title">
                  Projects
                </div>
                <div class="mint-home-card-description">
                  My other projects.
                </div>
              </div>
            </a>
            <a href="<?=Router::link("new")?>">
              <div class="mint-home-card">
                <div class="mint-home-card-title">
                  What's New?
                </div>
                <div class="mint-home-card-description">
                  Keep track of what I am up to.
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    Renderer::render("Footer");
  ?>
</body>
</html>
