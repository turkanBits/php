<?php

// final

// class MyClass {


//    public function sayHello() {
//       echo "Salam bu MyClass-dir";
//    } 

// }


// class ChildClass extends MyClass {
  
// }

class ParentClass {
   public function greet() {
     echo "Salam";
   }
}







































//  class User {

//     //  gizli melumat (private property)

//     private $name;

//     public function setName($name){
//         if (strlen($name)>2) {
//            $this->name=$name;
//         } else {
//            echo "Ad en azi 3 simvol olmalidir!<br>";
//         }
//     }

//     public function getName() {
//        return $this->name;
//     }

//  }

//  $user=new User();
//  $user->setName("ali");
//  echo $user->getName();




// Traits

// bir class sadece basqa bir dene classi extends ede biler.
 

// class parentClass {
//    public function sayHello() {
//     echo 'Parent Hemide';
//    }
// }

// trait MyTrait {
//    public function sayHello() {
//     echo 'Hello from Turkan';
//    }
// }

// class ChildClass extends ParentClass {

//     use MyTrait;

// }

// $obj=new ChildClass();
// $obj->sayHello();

// $obj2=new ParentClass();
// $obj2->sayHello();


// const

// static dweyerdir


// ::


// abstract class Shape {

//    abstract public function area(); 

//    public function describe() {
     
//      return "Bu bir sekil obyektidir";
     
//    }

// }


// class Circle extends Shape {

//   private $radius;

//   public function __construct($radius)
//   {
//     $this->radius=$radius;
//   }

//   public function area() {
//     return pi() * $this->radius ** 2;
//   }
// }

// class Rectangle extends Shape {
//   private $width,$height;

//   public function __construct($width,$height) {
//     $this->width=$width;
//      $this->height=$height;

//   }

//    public function area() {
//      return $this->width * $this->height;
//    }
// }


// $circle = new Circle (5);
// $rectangle =new Rectangle (3,8);

// echo "Dairenin sahesi:" .$circle->area() . "<br>";
// echo $circle->describe();

// echo "Duzbucaqlinin sahesi:".$rectangle->area() ."<br>";
// echo $rectangle->describe();



// interface InterfaceA {
//    const GREETING1 ="salam";
// }


// interface InterfaceB {
//   const GREETING2 ="hello";
// }


// class MyClass implements InterfaceA,InterfaceB {

//   public function sayHello() {
//     echo InterfaceA::GREETING1;
//     echo InterfaceB::GREETING2;
//   }

// }

// $obj=new MyClass();
// $obj->SayHello();

// interface MyInterface {
//    const MESSAGE = "Bu bir interface sabitidir";
// }

// class MyClass implements MyInterface{
//   //  const MESSAGE = 200;
// }

// echo MyClass::MESSAGE;




// interface Engine {

//     public function start ();

// }


// interface Fuel {

//   public function refuel($liters);

//   }
  


// class Car implements Engine,Fuel {

//   private $fuelLevel =0;

//    public function start() {
//       if($this->fuelLevel > 0) {
//         echo "Masin ise dusdu <br>";
//       } else {
//         echo "Yanacaq yoxdur.<br>";
//       }

//    }

//     public function refuel($liters) {
 
//       $this->fuelLevel += $liters;
//       echo "Yanacaq dolduruldu:$liters litr.Hazirki seviyye:$this->fuelLevel litr teskil edir.<br>";
     
//     }
// }


// $car=new Car();

// $car->start();
// $car->refuel(400);
// $car->start();























































// polymorphism-coxsekillilik (PHP-DE DESTEKLENMIR)

// eyni metod adinin ferqli classlarda isleye bilmesi


// 1)compile-time
// 2)run time-irsiyyet ve overriding vasitesi ile heyata kecirilir


// interfeysler vasitesi ile heyata kecirilir-interface




                      // INTERFACE

          //  OPP de bir nov sablondur interfacede metodlar yalniz elan edilir.yalniz onlarin ici yazilmir(implementation{bezekli moterizenin ozu })         

  //  interface Shape {

  //   public function area();
  //   public function perimetr();


  //  }  

  //  class Circle implements Shape {

  //   private $radius;

  //   public function __construct($radius)
  //   {
  //       $this->radius =$radius;
  //   }
    
  //    public function area() {
  //       return pi() * $this->radius ** 2;
  //    }

  //    public function perimetr() {
  //        return pi() * $this->radius * 2;
  //    }
  //  }


  //  class Rectangle implements Shape {

  //   private $width ,$height;

  //   public function __construct($width,$height)
  //   {
  //       $this->width =$width;
  //        $this->height =$height;
  //   }
    
  //    public function area() {
  //       return $this->width * $this->height;
  //    }

  //    public function perimetr() {
  //        return ($this->width + $this->height)  * 2;
  //    }
  //  }

  //  $circle = new Circle(5);
  //  $rectangle =new Rectangle(4,6);


  //  echo "Dairenin sahesi:                   " . $circle->area()           ."<br>";
  //  echo "Dairenin perimetri:                " . $circle->perimetr()       ."<br>";
  //  echo "Duzbucaqlinin  sahesi:             " . $rectangle->area()           ."<br>";
  //  echo "Duzbucaqlinin  perimetri:          " . $rectangle->perimetr()       ."<br

// class Animal {
//   public function sound () {
//     echo "Heyvan sesi cixarir.<br>";
//   }
// }

// class Dog  extends Animal {
//   public function sound () {
//     echo "it hurur hav hav.<br>";
//   }
// }

// class Cat extends Animal {
//   public function sound () {
//     echo "pisik miyolduyur miav miav.<br>";
//   }
// }

// $dog=new Dog ();
// $cat=new cat ();
// $animal=new Animal();


// $dog->sound();
// $cat->sound();
// $animal->sound();




















































// overriding-inheritance
// polymorphism-dedikde ise interface agla gelmelidir

// class A {
//   public function methodA() {
//     echo "Bu class A-dan gelir .<br>";
//   }

// }

// class B extends A {
//    public function methodB() {
//     echo "Bu class B-den gelir .<br>";
//   }
// }


// class C extends B {
//    public function methodC() {
//     echo "Bu class C-den gelir .<br>";
//   }
// }

// class D extends C {
//    public function methodD() {
//     echo "Bu class D-den gelir .<br>";
//   }
// }

// $d = new D ();

// $d->methodA();
// $d->methodB();
// $d->methodC();
// $d->methodD();
// Access Modifiers ve Inheritance

// class ParentClass{
 
//   public $publicVar="Public";
//   protected $protectedVar="Protected";
//   private $privateVar="Private";

//   public function showVars(){
 
//     echo $this->publicVar . '<br>';
//     echo $this->protectedVar . '<br>';
//     echo $this->privateVar . '<br>';
  

//   } 

// }



// class ChildClass extends ParentClass{

//   public function showParentVars() {
//       echo $this->publicVar     . '<br>';
//       echo $this->protectedVar   . '<br>';
//       // echo $this->privateVar . '<br>';
//   }
// }


// $c=new ChildClass();
// $c->showParentVars();

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


