<?php

// Deep copy 

class Product {
    public $name;
    public $details;

    public function __clone() {
        $this->details=clone $this->details;

    }
}


$details=new stdClass();
$details->description = "A high-end laptop";

$product1=new Product();
$product1->name="Laptop";
$product1->details=$details;


$product2=clone $product1;
$product2->details="A cloned product"; 


echo $product1->details->description . "<br>";






















// cloning and copy



// class Turkan {
//     public $name='Merhaba';
// }

// $turkan = new Turkan();

// echo $turkan->name;


//  $object1=new stdClass();
//  $object1->name="John";


// $object2=clone $object1;
// $object2->name="Doe";

// echo $object1->name;
// echo $object2->name;


// class Product {
//     public $name;


//     public function __clone() {
//         $this->name="Cloned:" .$this->name;
//     }
// }

// $product1=new Product();
// $product1->name="Laptop";

// $product2=clone $product1;

// echo $product1->name ."<br>";
// echo $product2->name ."<br>";




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