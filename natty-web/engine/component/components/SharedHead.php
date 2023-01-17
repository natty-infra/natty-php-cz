<?php
  require_once 'ComponentBase.php';

  class SharedHead extends Component
  {
    public function render(...$data)
    {
      include __DIR__ . "/../component-parts/SharedHead.php";
    }
  }
?>
