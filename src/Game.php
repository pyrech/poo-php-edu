<?php

class Game
{
    private $team1;
    private $team2;

    private $observers = [];

    public function __construct(Team $team1, Team $team2)
    {
        $this->team1 = $team1;
        $this->team2 = $team2;
    }

    public function isFinish(): bool
    {
        return !$this->team1->isAlive() || !$this->team2->isAlive();
    }

    /** @return Team|null */
    public function getWinnerTeam()
    {
        if ($this->team1->isAlive()) {
            return $this->team1;
        }

        if ($this->team2->isAlive()) {
            return $this->team2;
        }

        return null;
    }

    public function getTeam1(): Team
    {
        return $this->team1;
    }

    public function getTeam2(): Team
    {
        return $this->team2;
    }

    public function addObserver(EndOfGameObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function finish()
    {
        foreach ($this->observers as $observer) {
            $observer->notify($this);
        }
    }
}
