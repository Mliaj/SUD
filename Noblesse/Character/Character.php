<?php

namespace Noblesse\Character;

require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/start.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "Noblesse/Character/CharHelpers.php";

use const Noblesse\Character\{BASE_HEALTH, BASE_DAMAGE};

abstract class Character implements CharacterInterface
{
    private $name;
    private $charType;
    private $weaponType;
    private $health;
    private $damage;
    private $minDamage;
    private $maxDamage;

    public function __construct(
        string $newName, 
        string $newCharType,
        string $newWeaponType,
        int    $newMinDamage,
        int    $newMaxDamage) {

        $this->name         = $newName;
        $this->charType     = $newCharType;
        $this->weaponType   = $newWeaponType;
        $this->health       = BASE_HEALTH;
        $this->minDamage    = $newMinDamage;
        $this->maxDamage    = $newMaxDamage;
    }

    public function setName(string $newName)
    {
        $this->name = $newName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDamage()
    {
        return $this->damage = rand($this->minDamage, $this->maxDamage);
    }

    public function getCharType()
    {
        return $this->charType;
    }

    public function getWeaponType()
    {
        return $this->weaponType;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setHealth(int $dmgTaken)
    {
        $this->health = $this->getHealth() - $dmgTaken;

        if ($this->health <= 0) {
            $this->health = 0;
        }
    }

    public function attack(Character $character)
    {
        $character->setHealth($this->getDamage());
    }

    public function flee()
    {
        return true;
    }
}