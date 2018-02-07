<?php

interface Character
{
    public function attack(Character $character);

    public function receiveDamage(int $damage);

    public function isAlive(): bool;

    public function getLife(): int;
}
