<?php

spl_autoload_register(    function($class) {

   $path = __DIR__ . '/src/' .str_replace('\\','/',$class) . '.php';





});
















// require_once 'src/ProjectA/User.php';
// require_once 'src/ProjectB/UserB.php';


// use ProjectA\User as UserA;
// use ProjectB\User as UserB;



// $userA = new UserA();
// echo $userA->greet();


// $userB = new UserB();
// echo $userB->greet();