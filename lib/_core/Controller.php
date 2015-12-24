<?php
/**
 * this class is the main class for controllers,
 * in this class we can declare methods and vars needed for all controllers
 * like typical functions frecuently used to control.
 * in this case we will use just specific functions
 * not general so far, so this feature will not be used neither
 */
class Controller
{
  private $libraries = "";
  function __construct()
  {
    # code...
    $this->libraries = "Libraries required for any controller loaded from the Main Controller Class...";
  }
}

?>
