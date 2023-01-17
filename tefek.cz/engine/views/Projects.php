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
        Pluto Engine
      </span>
      <div class="mint-card-content">
        <p>
          My hobby game engine I've recently started taking more seriously.
          I plan to use it for future games I write.
        </p>
        <p>
          The engine is open source under the MIT license.
        </p>
        <p>
          <a class="mint-link" href="https://github.com/493msi/plutoengine">GitHub repository</a>
        </p>
      </div>
    </div>
    <div class="mint-solo-card mint-colorscheme-secondary-bg">
      <span class="mint-card-heading">
        Botdiril
      </span>
      <div class="mint-card-content">
        <p>
          An interactive Discord bot that was first made for Vandiland, but I plan to release it publicly soon.
          Botdiril is open source, however I am doing a complete rewrite soon, so I will probably start a new repository for it.
        </p>
        <img class="mint-card-img-s" src="<?=Router::link("img/other/botdiril-full.png")?>" alt="Botdiril's Full Logo" />
        <p>
          <a class="mint-link" href="<?=Router::link("botdiril")?>">Read more...</a>
          <a class="mint-link" href="https://botdiril.tefek.cz/">Subsite</a>
        </p>
      </div>
    </div>
    <div class="mint-solo-card mint-colorscheme-secondary-bg">
      <span class="mint-card-heading">
        tefek.cz - This Website
      </span>
      <div class="mint-card-content">
        <p>
          I managed to rewrite the entire website and took the opportunity to make it more useful and better represent myself.
          I am planning to slowly move all my fragments of sites here and make it more centralized.
        </p>
        <p>
          It might take a while, but it will be worth it in the long term, especially since I have roughly seven different subdomains for tefek.cz at this very moment.
        </p>
        <p>
          <a class="mint-link" href="<?=Router::link("new")?>">News and updates...</a>
        </p>
      </div>
    </div>
    <div class="mint-solo-card mint-colorscheme-secondary-bg">
      <span class="mint-card-heading">
        Event Horizon
      </span>
      <div class="mint-card-content">
        <p>
          It's pretty much a dead project, but I wish to return to it once I get inspired enough to do something with it.
        </p>
        <p>
          It's built on PlutoEngine, which sadly needs a rewrite, because it is unusable in its current state.
        </p>
        <p>
          I host a <a href="https://eventhorizon.tefek.cz">website</a> for it, however I do not maintain it.
        </p>
        <img class="mint-card-img-s" src="<?=Router::link("img/other/eventhorizon-full.png")?>" alt="Event Horizon's Full Logo" />
        <p>
          <a class="mint-link" href="https://eventhorizongame.tumblr.com/">Old dev blog</a>
          <a class="mint-link" href="https://eventhorizon.tefek.cz/">Subsite</a>
        </p>
      </div>
    </div>
  </div>
  <?php
      Renderer::render("Footer");
  ?>
</body>
</html>
