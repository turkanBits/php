<?php

// Access Modifiers ve Inheritance

class ParentClass{
 
  public $publicVar="Public";
  protected $protectedVar="Protected";
  private $privateVar="Private";

  public function showVars(){
 
    echo $this->publicVar . '<br>';
    echo $this->protectedVar . '<br>';
    echo $this->privateVar . '<br>';
  

  } 

}



class ChildClass extends ParentClass{

  public function showParentVars() {
      echo $this->publicVar     . '<br>';
      echo $this->protectedVar   . '<br>';
      // echo $this->privateVar . '<br>';
  }
}


$c=new ChildClass();
$c->showParentVars();


































// inheridance-extends(acar soz)

  // Parent class(super class,base class)
  // child class (sub class,derived class)


  // class Animal {
  //   public $name;


  //   public function eat() {
  //     echo $this->name . " Animal is eating.<br>";
  //   }


  // }

  // class Dog extends Animal{
    
  //    public function bark() {
  //     echo $this->name . "Dog is barking.<br>";

  //    }
     
  // }

  // class Cat extends Animal{
    
  //    public function meow() {
  //     echo $this->name . "Cat is meowing.<br>";
      
  //    }
     
  // }

  // $dog=new Dog();
  // $dog->name="Rex ";
  // $dog->eat();
  // $dog->bark();


  // $cat=new Cat();
  // $cat->name="Doby ";
  // $cat->eat();
  // $cat->meow();






























//  class User {

//    public static $userCount=0;
  
//    public function __construct()
//    {
//      self::$userCount++;
//    }

//   }

//    $user1=new User();
//    $user2=new User();

//    echo "Istifadeci sayi: " .User::$userCount;
  

// static keyword-class obyekt yaradilmadan istifade edile biler.

// static property ve metodlar-classa mexsusdur.

// this acar sozu ile istiade edile bilmez evezinde sekf ve ya static istifade oluna biler.

// class Counter {
//   public static $count =0;


//   public static function increment() {
//     self::$count++;
//   }
// }

// $a = new Counter ();


// Counter::increment();
// Counter::increment();
// echo Counter::$count;

// class Test {

//   private $info = "This is a private class. <br>";

//   private function showInfo() {
//       echo "This is a private method in the parent class.";
      

//    }

//    public function displayInfo() {
//        echo $this->info;
//        $this->showinfo();
//    }

// }

// $test=new Test();
// $test->displayInfo();





































// Access Modifiers

  // public-hem class icinde hem class colunde el catan olur.her yerde istifade edile bilir en genis giris icazesine  sahibdir





  // private-yalniz classin icersinde isleye bilir





  // protected-classin daxilinde isleye bilir.




  // inheritance-irsiyyet.

  // class test{
  //   public $name = "Jhon Doe";

  //   public function sayHello() {

  //     echo "Hello,my name is" . $this->name;

  //   }




  // }

  // $test = new Test();
  // echo $test->name;
  // $test->sayHello()












































  //  Php de konstruktor ve destruktor obyektin heyat dovrunun muxtelif merhelelerinde ise dusen xususi metodlardir.
    
//  PHP DE OBYEKTIN HEYAT DOVRU 3 MERHELEDEN IBARETDIR.
//  1.obyektin yaradilmasi - instantiation
//  2.obyektin istifadesi-object usage
//  3.obeyktin mehv edilmesi-destruction




// __destruct()-parametr qebul etmir

    // class FileHander{
   
    //   private $file;

    //   public function __construct($filename) {

    //     $this->file =fopen($filename, "w");

    //     echo "File opened successfully:$filename\n";

    //   }


    //   public function __destruct() {

    //     fclose($this->file);
    //     echo "File closed successfuly.\n";
    //   }


    // }

    // $fileHandler = new FileHander ("test.txt");

     


    



































  //  class Car {

  //   // propery
  //     public $color;
  //     public $model;



  //   //  metod
  //     public function start() {
  //       echo "Avtomobil ise dusdu. <hr>";
  //     }
  //  }

  //  $bmw = new Car ();
  //  $bmw->color="qirmizi";
  //  $bmw->model="Bmw X5";

  //  echo $bmw->color . "<br>";
  //  echo $bmw->model . "<br>";
  //   $bmw->start();

  //  $mercedes = new Car ();
  //  $mercedes->color="boz";
  //  $mercedes->model="mercedes S-class";

  //  echo $mercedes->color . "<br>";
  //  echo $mercedes->model . "<br>";
  //   $mercedes->start();




  //   $dodge = new Car ();
  //   $dodge->color="qara";
  //   $dodge->model="dodge hellcat";

  //   echo $dodge->color . "<br>";
  //   echo $dodge->model . "<br>";
  //   $dodge->start();


