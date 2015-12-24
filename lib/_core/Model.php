<?php
/**
 * this class is the main class for models,
 * in this class we can declare variables needed for all models
 * like database conection or type of response.
 * in this case we will just store an array with the cards and
 * this feature will not be used
 */
class Model
{
  private $databaseConection = "";
  function __construct()
  {
    # code...
    $this->databaseConection = "Database Conection instanciated from the Main Model Class...";
  }
}
 ?>
