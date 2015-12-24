<?php
require "lib/controller/gameController.php";

$content = "<h1>PHP Cards Library demo</h1>";
$content .= "<p>This demo works ta first page load, this page will ";
$content .= " call methods from the instanciated object (gameController), ";
$content .= " and after each call it will display the related objects status</p>";
$game = new gameController();
$content .= "<br /><h3>The game object after instanciated:</h3>";
$content .= $game->getGameStatus();

$game->serveFullHand();
$content .= "<br /><h3>The game object after calling serveFullHand method:</h3>";
$content .= $game->getGameStatus();


$view = new index($content);
$view->render();

?>
