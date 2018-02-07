<?php

class Warrior implements Character
{
    const MAX_DAMAGE = 3;

    private $name;
    private $life;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->life = 10;
    }

    public function attack(Character $character)
    {
        $damage = random_int(1, self::MAX_DAMAGE);

        $character->receiveDamage($damage);
    }

    public function receiveDamage(int $damage)
    {
        $this->life -= $damage;
    }

    public function isAlive(): bool
    {
        return $this->life > 0;
    }

    public function getLife(): int
    {
        return $this->life;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
