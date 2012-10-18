<?php
require 'autoload.php';

$game = new Game();

while ($game->getActive()) {
	$game->addRoll(4);
}

echo $game->displayScoreBoard();
