<?php
    echo $GLOBALS["html_comment"];
?>
<!DOCTYPE html>
<html lang="en">
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
                    Containers!
                </span>
                <span class="mint-card-subheading">
                    2022/06/29
                </span>
                <div class="mint-card-content">
                    <p>
                        This site now runs as a Docker container! 😎
                    </p>
                </div>
            </div>
            <div class="mint-solo-card mint-colorscheme-secondary-bg">
                <span class="mint-card-heading">
                    Site redesign
                </span>
                <span class="mint-card-subheading">
                    2022/04/17
                </span>
                <div class="mint-card-content">
                    <p>
                        I redesigned the site to lovely purple 💜 and updated my bio.
                    </p>
                </div>
            </div>
            <div class="mint-solo-card mint-colorscheme-secondary-bg">
                <span class="mint-card-heading">
                    Site migration
                </span>
                <span class="mint-card-subheading">
                    2021/07/01
                </span>
                <div class="mint-card-content">
                    <p>
                        I've migrated this site to a new place with a much better infrastructure and security since I
                        have been growing more and more dissatisfied with my current webhost.
                    </p>
                    <p>
                        Basically, this site now runs on Nginx instead of Apache and I've switched to PHP8.
                        All this on a tiny Alpine Linux server. 🙂
                    </p>
                    <p>
                        I'll also start porting subdomains soon.
                    </p>
                </div>
            </div>
            <div class="mint-solo-card mint-colorscheme-secondary-bg">
                <span class="mint-card-heading">
                    Bio and projects
                </span>
                <span class="mint-card-subheading">
                    2020/10/31
                </span>
                <div class="mint-card-content">
                    <p>
                        I updated my bio and the projects I am working on.
                    </p>
                </div>
            </div>
                <div class="mint-solo-card mint-colorscheme-secondary-bg">
                <span class="mint-card-heading">
                    Website Update
                </span>
                <span class="mint-card-subheading">
                    2019/02/09
                </span>
                <div class="mint-card-content">
                    <p>
                        I addressed some issues and added a Twitter feed.
                    </p>
                    <a href="<?= Router::link("tweets") ?>" class="mint-link">Twitter feed</a>
                </div>
            </div>
            <div class="mint-solo-card mint-colorscheme-secondary-bg">
                <span class="mint-card-heading">
                  Botdiril Rewrite
                </span>
                <div class="mint-card-content">
                    <p>
                        Currently I am working on a rewrite of Botdiril.
                        I'll try to keep people informed about what I am working on as much as possible.
                    </p>
                    <a href="<?= Router::link("botdiril") ?>" class="mint-link">Learn more...</a>
                </div>
            </div>
            <div class="mint-solo-card mint-colorscheme-secondary-bg">
                <span class="mint-card-heading">
                    Website Relaunch
                </span>
                <span class="mint-card-subheading">
                     2019/02/03
                </span>
                <div class="mint-card-content">
                    <p>
                        I've relaunched this site.
                        I'll hopefully try to maintain it as much as possible.
                    </p>
                </div>
            </div>
        </div>
        <?php
            Renderer::render("Footer");
        ?>
    </body>
</html>
