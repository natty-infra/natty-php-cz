<meta charset="utf-8" />
<meta name="description" content="Natty's central website, containing information about her and her projects." />
<meta name="keywords" content="Natty, Botdiril">

<meta property="og:site_name" content="Natty's Website" />
<meta property="og:title" content="<?=$GLOBALS["title"]?>" />
<meta property="og:type" content="website" />
<meta property="og:description" content="Natty's central website, containing information about her and her projects." />
<meta property="og:url" content="https://www.natty.sh" />
<meta property="og:image" content="https://natty.sh/assets/logo.webp" />

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" type="text/css" href="<?=$GLOBALS["root"]?>/style/shared.css" />
<link rel="stylesheet" type="text/css" href="<?=$GLOBALS["root"]?>/style/mint-component.css" />
<link rel="stylesheet" type="text/css" href="<?=$GLOBALS["root"]?>/style/header-mint.css" />
<link rel="stylesheet" type="text/css" href="<?=$GLOBALS["root"]?>/style/menu-mint.css" />
<link rel="stylesheet" type="text/css" href="<?=$GLOBALS["root"]?>/style/footer-mint.css" />

<link rel="icon" type="image/png" sizes="192x192"  href="/img/icon/android-icon-192x192.png" />
<link rel="icon" type="image/png" sizes="32x32" href="/img/icon/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="96x96" href="/img/icon/favicon-96x96.png" />
<link rel="icon" type="image/png" sizes="16x16" href="/img/icon/favicon-16x16.png" />
<link rel="manifest" href="/manifest.json" />
<meta name="msapplication-TileColor" content="#00a075" />
<meta name="msapplication-TileImage" content="/img/icon/ms-icon-144x144.png" />
<meta name="theme-color" content="#151515" />

<?php
  if (isset($GLOBALS["stylesheets"]))
  {
    foreach ($GLOBALS["stylesheets"] as $key => $value)
    {
      echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"{$value}\">";
    }
  }
?>

<title><?=$GLOBALS["title"]?></title>
