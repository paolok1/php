<?php

require('razzi.php');
require('lanciafiamme.php');
require('scudo.php');
require('volo.php');

class IronmanSkills{
    public $attack;
    public $defence;
    public static $counter=0;

    public function __construct(Attack $attacco, Defense $difesa){
        $this->attack = $attacco;
        $this->defence = $difesa;
        self::$counter++;

    }
    public function ironmanAttack(){
        $this->attack->attack();
    }
    public function ironmanDefence(){
        $this->defence->defence();
    }

}

$ironman = new IronmanSkills(new Razzi(), new Flight());
// var_dump($ironman);
$ironman->IronmanAttack();
$ironman->IronmanDefence();
echo IronmanSkills::$counter . "\n";
$ironman2= new IronmanSkills(new Lanciafiamme(), new Shield());
$ironman2->IronmanAttack();
$ironman2->IronmanDefence();
echo IronmanSkills::$counter . "\n";

