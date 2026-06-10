<?php

// cloning and copy



// class Turkan {
//     public $name='Merhaba';
// }

// $turkan = new Turkan();

// echo $turkan->name;


 $object1=new stdClass();
 $object1->name="John";


$object2=clone $object1;
$object2->name="Doe";

echo $object1->name;
echo $object2->name;







// class Greetable {
//     public function greet() {
//         return "Hello!";
//     }
// }

// $object =new class extends Greetable {
//     public function greet() {
//         return parent::greet() ;
//     }
// };


// echo $object->greet();







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