<?php
  require_once 'ComponentBase.php';

  class Header extends Component
  {
    public function render(...$data)
    {      
      include __DIR__ . "/../component-parts/Header.php";
    }
  }
?>
