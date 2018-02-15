<?php

class GodSwarm implements Character
{
    private $character;

    public function __construct(Character $character)
    {
        $this->character = $character;
    }

    public function attack(Character $character)
    {
        $character->receiveDamage(10);
    }

    public function receiveDamage(int $damage)
    {
        $this->character->receiveDamage($damage);
    }

    public function isAlive(): bool
    {
        return $this->character->isAlive();
    }

    public function getLife(): int
    {
        return $this->character->getLife();
    }

    public function getName(): string
    {
        return $this->character->getName();
    }
}
