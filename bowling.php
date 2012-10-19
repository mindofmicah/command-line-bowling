<?php
require 'autoload.php';

$game = new Game();

while ($game->getActive()) {
	try {
		$game->addRoll(10);
	} catch (Exception $e) {
		break;
		print_r($e);
		die();
	}
}

echo $game->displayScoreBoard();
