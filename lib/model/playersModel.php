<?php
require_once ("lib/_core/Model.php");
class Players extends Model{
    protected $persons;
    function __construct () {
      $this->persons[0]["name"] = "Claudia";
      $this->persons[0]["cards"] = [];
      $this->persons[1]["name"] = "Gabriela";
      $this->persons[1]["cards"] = [];
      $this->persons[2]["name"] = "Carlos";
      $this->persons[2]["cards"] = [];
    }

    public function getPlayers () {
      return $this->persons;
    }

    public function getNumberOfPlayers () {
      return count($this->persons);
    }

    public function receiveCard($idPerson,$idCard){
      array_push($this->persons[$idPerson][cards],$idCard);
    }

}
?>
