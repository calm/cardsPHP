<?php
/**
 * this class is the main class for views,
 * in this class we can declare variables needed for all views
 * like templates or html-headers (image,json,html,xml...).
 * this feature will not be used
 */
class View
{
  private $template = "";
  function __construct()
  {
    # code...
      $this->template = "template loaded from the Main View Class...";
  }
}
 ?>
