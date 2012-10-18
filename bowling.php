<?php
require 'autoload.php';

$game = new Game();
$game->addRoll(4);
$game->addRoll('X');
$game->addRoll(42);
$game->addRoll('fasd');
$game->addRoll(6);


echo $game->displayScoreBoard();

#print_r($game);
