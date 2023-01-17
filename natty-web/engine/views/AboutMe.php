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
            About Me
        </span>
        <div class="mint-card-content">
          <p>
            My name is Natty, I am a <?php
                $tz  = new DateTimeZone('Europe/Prague');
                $age = DateTime::createFromFormat('d/m/Y', '27/09/1998', $tz)->diff(new DateTime('now', $tz))->y;
                echo $age;
            ?> year old computer engineering student from the Czech Republic.
            My activities include programming in various languages (usually Java and Rust), playing games,
            chatting on&nbsp;Discord and creating crazy projects.
          </p>
          <p>
            I have several nicknames, I mostly use <b>Natty</b> though.
            Natty comes from Natalia/Natalie.
          </p>
        </div>
      </div>
      <div class="mint-solo-card mint-colorscheme-secondary-bg">
        <span class="mint-card-heading">
          FAQ
        </span>
        <div class="mint-card-content mint-qna">
          <dt>
            Pineapple on&nbsp;pizza?
          </dt>
          <dl>
            No.
          </dl>
          <dt>
            What happened to Stardust Miner, Pluto Engine and Botdiril?
          </dt>
          <dl>
            I am still working on them, currently I am actively developing PlutoEngine.
            I sometimes share my progress on my <a href="<?=Router::link("contact")?>">Discord</a>.
          </dl>
          <dt>
            What servers are you active on?
          </dt>
          <dl>
            Mostly the <a href="https://tech.lgbt/@natty" rel="noreferrer nofollow">tech.lgbt Mastodon</a>
            and sometimes on <a href="<?=Router::link("contact")?>">my public Discord</a>.
          </dl>
          <dt>
            Will you add feature X to Botdiril?
          </dt>
          <dl>
            Well, it depends. I am usually aware of what feature I want to add next, but I am welcome to all suggestions!
          </dl>
        </div>
      </div>
      <div class="mint-solo-card mint-colorscheme-secondary-bg">
        <span class="mint-card-heading">
          Me on Social Media
        </span>
        <div class="mint-card-content">
          <p>
            I have two YouTube channels, <a href="https://www.youtube.com/channel/UCPxgc5rl0DCmsPxgy6vsIzQ">Natty</a> and <a href="https://www.youtube.com/channel/UCzRS17rRVg1zxPGe_DymCMA">Natty4</a> (my personal channel).
            Sadly, I don't have enough interesting content to post videos more often.
          </p>
          <p>
            I also have a <a href="https://twitter.com/AMTefek">Twitter account</a>, even though I don't use it much.
          </p>
          <a href="<?=Router::link("tweets")?>" class="mint-link">Twitter Feed</a>
        </div>
      </div>
      <div class="mint-solo-card mint-colorscheme-secondary-bg">
        <span class="mint-card-heading">
          Coding
        </span>
        <div class="mint-card-content">
          <p>
            Ever since I was a kid, I've had passion for coding.
            I started out by creating simple websites with annoying JavaScript animations, but slowly moved onto more complicated projects.
            I barely ever finish anything, though.
            I dream of finishing and releasing a good game one day.
          </p>
        </div>
        <div class="mint-card-content">
          <b>Languages I've tried out so far:</b>
          <ul>
            <li>
              Java
              <ul>
                <li>
                  My favorite language so far
                </li>
                <li>
                  I feel quite comfortable coding in it
                </li>
                <li>
                  I made most of my projects in Java, including Botdiril
                </li>
              </ul>
            </li>
            <li>
              Rust
              <ul>
                <li>
                  A new favorite of mine
                </li>
                <li>
                  Still learning it though
                </li>
              </ul>
            </li>
            <li>
              JavaScript
              <ul>
                <li>
                  I usually use JavaScript only for websites and avoid NodeJS or similar
                </li>
              </ul>
            </li>
            <li>
              C
              <ul>
                <li>
                  I pretty much only use it for school projects
                </li>
              </ul>
            </li>
            <li>
              C++
              <ul>
                <li>
                  I use C++ only for small fun projects, usually nothing serious
                </li>
              </ul>
            </li>
            <li>
              C#
              <ul>
                <li>
                  I avoid C# as I don't like the language but I've finished some small projects in it
                </li>
              </ul>
            </li>
            <li>
              PHP
              <ul>
                <li>
                  I have some basic PHP knowledge, enough to create a basic website, I avoid it otherwise
                </li>
              </ul>
            </li>
            <li>
              Python
              <ul>
                <li>
                  I use Python only for small projects and scripts as I tend to get lost in large Python sources
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="mint-card-content">
          <p>
            I also sometimes mess around with computer graphics stuff like OpenGL and similar.
          </p>
        </div>
      </div>
      <div class="mint-solo-card mint-colorscheme-secondary-bg">
        <span class="mint-card-heading">
          Games I Play
        </span>
        <div class="mint-card-content">
          <p>
            I mostly play League of Legends or sandbox games like Minecraft or Terraria these days, even though I sometimes try something new out.
          </p>
          <p>
            I have a <a href="https://steamcommunity.com/id/493msi">Steam account</a>, Blizzard account (adding only people I know) and I play League of Legends on the EUNE region.
          </p>
        </div>
      </div>
    </div>
    <?php
      Renderer::render("Footer");
    ?>
</body>
</html>
