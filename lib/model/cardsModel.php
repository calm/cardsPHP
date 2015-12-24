<?php
require_once ("lib/_core/Model.php");
class Cards extends Model{
    protected $deck = array();
    function __construct () {
      $this->loadCards();
    }

    private function loadCards () {
      $text = "clubs";
      for ($i=1; $i < 53; $i++) {
        if ($i===14) {$text = "diamonds";}
        if ($i===27) {$text = "spades";}
        if ($i===40) {$text = "hearts";}
        switch ($i){
          case ($i == 1) ||
               ($i == 14) ||
               ($i == 27) ||
               ($i == 40):  $this->deck[$i]["name"] = "ace_".$text;
                  $this->deck[$i]["value"] = 1;
                  break;
          case ($i == 11) ||
               ($i == 24) ||
               ($i == 37) ||
               ($i == 50): $this->deck[$i]["name"] = "jack_".$text;
                  $this->deck[$i]["value"] = 11;
                  break;
          case ($i == 12) ||
               ($i == 25) ||
               ($i == 38) ||
               ($i == 51): $this->deck[$i]["name"] = "queen_".$text;
                  $this->deck[$i]["value"] = 12;
                  break;
          case ($i == 13) ||
               ($i == 26) ||
               ($i == 39) ||
               ($i == 52): $this->deck[$i]["name"] = "king_".$text;
                  $this->deck[$i]["value"] = 13;
                  break;
          default: if ($text==="clubs"){
                      $this->deck[$i]["name"] = $i."_".$text;
                      $this->deck[$i]["value"] = $i;
                      }
                  else if ($text==="diamonds"){
                      $y = $i-13;
                      $this->deck[$i]["name"] = $y."_".$text;
                      $this->deck[$i]["value"] = $y;
                      }
                  else if ($text==="spades"){
                      $y = $i-26;
                      $this->deck[$i]["name"] = $y."_".$text;
                      $this->deck[$i]["value"] = $y;
                      }
                  else if ($text==="hearts"){
                      $y = $i-39;
                      $this->deck[$i]["name"] = $y."_".$text;
                      $this->deck[$i]["value"] = $y;
                      }
                  break;
          }
      }
      #print_r(json_encode($this->deck));
      #return $this->deck;
      return true;
    }

    public function getNumberOfCards(){
      return sizeof($this->deck);
    }

    public function getNumberOfRemainingCards(){
      $limit = sizeof($this->deck);
      $n = 0;
      for ($i=1; $i <= $limit; $i++) {
        if ($this->deck[$i]["served"]!=true){
          $n++;
        }
      }
      return $n;
    }

    public function getCards(){
      return $this->deck;
    }

    public function serveCard(){
      $nCards = $this->getNumberOfCards();
      $safeEnd = 0;
      //here I have a fault, but it is the first functional demo
      //the $safeEnd counter might reach the top with cards remaining in the deck
      do {
        $safeEnd++;
        $i = rand(1,$nCards);
        if($safeEnd>($nCards+1)){
          return -1;
        }
      } while ($this->deck[$i]["served"] == true);
      //here in $i we have a valid card

      $this->deck[$i]["served"] = 1;
      return $i;
    }

}
?>
