<?php



$yeniKlass =new class {
    public $name = 'Anonim klasslar bu cur yaradilir';

    public function getName() 
    {
        return $this->name;
    }
    
};


echo $yeniKlass->getName();





















// use MyApp\Game\Player\Player;


// require_once realpath ('vendor/autoload.php');


// $player = new Player();

// $gameController =new \MyApp\Game\GameController();