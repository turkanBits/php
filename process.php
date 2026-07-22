<?php

if($_SERVER['REQUEST_METHOD' ] === 'POST' ) {
    
   $selected_fruit = $_POST['fruit'];

   echo "secdiyiniz meyve: " .$selected_fruit;
   

}
