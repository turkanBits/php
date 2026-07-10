<?php


// password_hash()

// password_hash($password,PASSWORD_DEFAULT)

$hash = password_hash("123456",PASSWORD_DEFAULT);

// echo $hash;


if ( password_verify("123456" , $hash)) {

    echo "Parol dogrudur"; 

}    

    

