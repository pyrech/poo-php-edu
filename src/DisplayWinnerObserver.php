<?php

class DisplayWinnerObserver implements EndOfGameObserver
{
    public function notify(Game $game)
    {
        $winner = $game->getWinnerTeam();

        if ($winner) {
            echo 'The winner is ', $winner->getName(), PHP_EOL;
        } else {
            echo 'Equality between both teams.', PHP_EOL;
        }
    }
}
