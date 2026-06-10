<?php

class Greetable {
    public function greet() {
        return "Hello!";
    }
}

$object =new class extends Greetable {
    public function greet() {
        return parent::greet() ;
    }
};


echo $object->greet();












// $yeniKlass =new class("Merhaba nasilsiniz") {

//     public $name;

//     public function __construct($deyer)
//     {
//         $this->name=$deyer;
//     }

//     public function getName() 
//     {
//         return $this->name;
//     }
    
// };


// echo $yeniKlass->getName();

// use MyApp\Game\Player\Player;


// require_once realpath ('vendor/autoload.php');


// $player = new Player();

// $gameController =new \MyApp\Game\GameController();