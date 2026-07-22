<?php

if($_SERVER['REQUEST_METHOD' ] === 'POST' ) {
    
   $selected_fruit = $_POST['fruit'];

  foreach($selected_fruit as $fruit) {
      echo $fruit ."<br>";
  }


}
