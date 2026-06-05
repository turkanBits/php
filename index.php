<?php

spl_autoload_register(    function($class) {

   $path = __DIR__ . '/src/' .str_replace('\\','/',$class) . '.php';

   if (file_exists($path)) {
      require_once $path;
   }



});


use App\Clasess\User;
use App\Clasess\Product;

$user = new User();
echo $user->greet();

$product = new Product();
echo $product->greet();














// require_once 'src/ProjectA/User.php';
// require_once 'src/ProjectB/UserB.php';


// use ProjectA\User as UserA;
// use ProjectB\User as UserB;



// $userA = new UserA();
// echo $userA->greet();


// $userB = new UserB();
// echo $userB->greet();