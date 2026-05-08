<?php
  //  Php de konstruktor ve destruktor obyektin heyat dovrunun muxtelif merhelelerinde ise dusen xususi metodlardir.
    
//  PHP DE OBYEKTIN HEYAT DOVRU 3 MERHELEDEN IBARETDIR.
//  1.obyektin yaradilmasi - instantiation
//  2.obyektin istifadesi-object usage
//  3.obeyktin mehv edilmesi-destruction




    class Person {

      public $name;
      public $age;



      public function __construct ($name,$age) {
 
          $this->name=$name;
          $this->age=$age;

      }

      public function sayHello(){

         echo  "My name is  {$this->name} and I am {$this->age}years old.<br> ";

      }
    }




    $person1 = new Person ("Turkan",21);
    $person2 = new Person ("Hemide",24);


    $person1->sayHello();
    $person2->sayHello();





































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


