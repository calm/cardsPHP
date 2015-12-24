<?php
require_once ("lib/_core/View.php");
class index extends View{
    protected $content;
    protected $header;
    protected $footer;
    function __construct ($content) {
      $this->header = "<html><head><title>what!</title></head><body>";
      $this->content = $content;
      $this->footer = "</body></html>";
    }

    public function render () {
      echo $this->header;
      echo $this->content;
      echo $this->footer;
    }
}
?>
