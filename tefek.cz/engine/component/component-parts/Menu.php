<menu id="mint-main-menu">
    <?php
      $index = 0;

      foreach($GLOBALS["menu_items"] as $key => $item)
      {
        $hue = $index * 18 + 240;
        $color = "hsl($hue, 100%, 75%)";

        $svgSrc = new DOMDocument();
        $svgSrc->loadXML(file_get_contents($item->_icon));
        $svgSrc->getElementsByTagName("svg")[0]->setAttribute("style", "width: 32px; height: 32px; fill: $color; stroke: $color");
        $svg = $svgSrc->saveXML($svgSrc->documentElement);

        ?>

        <a href="<?=$item->_route?>" style="color: <?=$color?>; border-color: <?=$color?>">
            <?=$svg?>
            <div><?=$item->_text?></div>
        </a>

        <?php

        $index++;
      }
    ?>
</menu>
