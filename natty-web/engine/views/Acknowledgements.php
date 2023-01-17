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
              Used Resources
            </span>
            <div class="mint-card-content">
                <p>
                    This website uses the following fonts:
                </p>
                <ul>
                    <li>
                        Amaranth, available under the <a href="http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL_web">Open Font License</a>
                    </li>
                    <li>
                        Open Sans, available under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License, Version 2.0</a>
                    </li>
                    <li>
                        Roboto, available under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License, Version 2.0</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php
      Renderer::render("Footer");
    ?>
</body>
</html>
