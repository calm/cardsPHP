<?php
require_once ("lib/_core/Controller.php");
require ("lib/model/cardsModel.php");
require ("lib/model/playersModel.php");
require ("lib/view/index.php");
class gameController extends Controller {
    private $cardsModel;
    private $playersModel;
    function __construct()
    {
      # loading cards
      $this->cardsModel = new Cards();
      #loading players
      $this->playersModel = new Players();
    }

    //this method is in game controller because it depends on the game rules.
    //we could define a gameType to define the set of rules.
    public function serveFullHand() {
      $numberOfPlayers = $this->playersModel->getNumberOfPlayers();
      for ($n=0; $n < 3; $n++) {
        for ($idPlayer=0; $idPlayer < $numberOfPlayers; $idPlayer++) {
          $this->playersModel->receiveCard($idPlayer,$this->cardsModel->serveCard());
        }
      }
      return true;
    }

    public function getGameStatus() {
      $text = "Status report: ";

      $text .= "<h3>Players Object: </h3>";
      $text .= json_encode($this->playersModel->getPlayers());
      $text .= "<h3>Cards Object: </h3>";
      $text .= json_encode($this->cardsModel->getCards());
      $text .= "<h3>Remaining cards: </h3>" . $this->cardsModel->getNumberOfRemainingCards();
      $text .= "<hr>";
      return $text;
    }

}
 ?>
