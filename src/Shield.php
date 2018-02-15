<?php

class Shield implements Character
{
    private $character;
    private $countAttacks;

    public function __construct(Character $character)
    {
        $this->character = $character;
        $this->countAttacks = 0;
    }

    public function attack(Character $character)
    {
        $this->character->attack($character);
    }

    public function receiveDamage(int $damage)
    {
        $this->countAttacks++;

        if ($this->countAttacks <= 3) {
            return;
        }

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
