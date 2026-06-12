

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 

     
      <p>Welcome to my website!</p>

  
</body>
</html> -->



<?php



class FileManager {
    private $filePath;


    public function __construct($filePath)
    {
        $this->filePath=$filePath;

    }

    public function writeToFile($content)
    {
        if (file_put_contents($this->filePath,$content)) {
            return "File written successfully." ."<br>";
        }else {
            return "Error writing to file." ."<br>";
        }
    }

     public function readFromFile()
    {
        if (file_exists($this->filePath)) {
            return file_get_contents($this->filePath) ."<br>";
        }else {
            return "File does not exist." ."<br>";
        }
    }


}


$fileManager =new FileManager ('example.txt');

echo $fileManager->writeToFile('Hello,World');
echo $fileManager->readFromFile();
























// Deep copy 

// class Product {
//     public $name;
//     public $details;

//     public function __clone() {
//         $this->details=clone $this->details;

//     }
// }


// $details=new stdClass();
// $details->description = "A high-end laptop";

// $product1=new Product();
// $product1->name="Laptop";
// $product1->details=$details;


// $product2=clone $product1;
// $product2->details="A cloned product"; 


// echo $product1->details->description . "<br>";






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