<?php
require 'autoload.php';

$game = new Game();
$game->addRoll(4);
$game->addRoll(5);
$game->addRoll(1);

echo $game->displayScoreBoard();

#print_r($game);
