<?php
  require_once 'ComponentBase.php';

  class Footer extends Component
  {
    public function render(...$data)
    {
      include __DIR__ . "/../component-parts/Footer.php";
    }
  }
?>
