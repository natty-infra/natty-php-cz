<?php
  require_once 'ComponentBase.php';

  $GLOBALS["menu_items"] = [
    new MenuItem("",         "natty",  "Home"),
    new MenuItem("aboutme",  "person", "About Me"),
    new MenuItem("projects", "apps",   "Projects"),
    new MenuItem("contact",  "mail",   "Contact Me")
  ];

  class MenuItem extends Component
  {
    public string $_route;
    public string $_icon;
    public string $_text;

    public function __construct($route, $icon, $text)
    {
      $this->_route = $GLOBALS["root"] . "/" . $route;
      $this->_icon = __DIR__ . "/../../../img/menu_icons/{$icon}_nocolor.svg";
      $this->_text = $text;
    }

    public function render(...$data)
    {
      include __DIR__ . "/../component-parts/Menu.php";
    }
  }

  class Menu extends Component
  {
    public function render(...$data)
    {
      include __DIR__ . "/../component-parts/Menu.php";
    }
  }
?>
