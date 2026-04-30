<?php


   class Car {

    // propery
      public $color;
      public $model;



    //  metod
      public function start() {
        echo "Avtomobil ise dusdu. <hr>";
      }
   }

   $bmw = new Car ();
   $bmw->color="qirmizi";
   $bmw->model="Bmw X5";

   echo $bmw->color . "<br>";
   echo $bmw->model . "<br>";
    $bmw->start();

   $mercedes = new Car ();
   $mercedes->color="boz";
   $mercedes->model="mercedes S-class";

   echo $mercedes->color . "<br>";
   echo $mercedes->model . "<br>";
    $mercedes->start();




    $dodge = new Car ();
    $dodge->color="qara";
    $dodge->model="dodge hellcat";

    echo $dodge->color . "<br>";
    echo $dodge->model . "<br>";
    $dodge->start();


