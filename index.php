<?php

require_once 'autoload.php';

$team1 = new Team('team rouge');
$team2 = new Team('team bleue');

$game = new Game($team1, $team2);

echo 'Game starts now!', PHP_EOL;

$round = 1;

while(!$game->isFinish()) {
    echo PHP_EOL, '# Round ', $round, PHP_EOL;

    $game->getTeam1()->attack($game->getTeam2());
    $game->getTeam2()->attack($game->getTeam1());

    echo 'Life recap', PHP_EOL;
    echo $game->getTeam1()->getCharacter1()->getName(), ' : ', $game->getTeam1()->getCharacter1()->getLife(), PHP_EOL;
    echo $game->getTeam1()->getCharacter2()->getName(), ' : ', $game->getTeam1()->getCharacter2()->getLife(), PHP_EOL;
    echo $game->getTeam2()->getCharacter1()->getName(), ' : ', $game->getTeam2()->getCharacter1()->getLife(), PHP_EOL;
    echo $game->getTeam2()->getCharacter2()->getName(), ' : ', $game->getTeam2()->getCharacter2()->getLife(), PHP_EOL;

    $round++;
    sleep(1);
}

echo PHP_EOL, 'Game is over!', PHP_EOL;

$winner = $game->getWinnerTeam();

if ($winner) {
    echo 'The winner is ', $winner->getName(), PHP_EOL;
} else {
    echo 'Equality between both teams.', PHP_EOL;
}

