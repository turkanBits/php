<?php

class ParentClass {

  protected $info = "This is a parent class. <br>";

  protected function showInfo() {
      echo "This is a protected method in the parent class.";
      

   }



}




class ChildClass extends ParentClass {
  
  public function accessProtected(){

    echo $this->info;
    $this->showInfo();


  }




}

$child=new ChildClass();

$child->accessProtected();








































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


