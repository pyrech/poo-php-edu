<?php

class Team
{
    private $name;

    private $character1;
    private $character2;

    public function __construct(string $name)
    {
        $this->name = $name;

        $this->character1 = new Warrior($name . ' - warrior');
        $this->character2 = new Wizard($name . ' - wizard');
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function attack(Team $team)
    {
        $activeCharacter = $this->getActiveCharacter();
        $activeCharacter->attack($team->getActiveCharacter());
    }

    public function isAlive(): bool
    {
        return $this->character1->isAlive() || $this->character2->isAlive();
    }

    public function getCharacter1(): Character
    {
        return $this->character1;
    }

    public function getCharacter2(): Character
    {
        return $this->character2;
    }

    private function getActiveCharacter(): Character
    {
        return $this->character1->isAlive() ? $this->character1 : $this->character2;
    }
}
