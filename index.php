<?php


// password_hash()

// password_hash($password,PASSWORD_DEFAULT)

// $hash = password_hash("123456",PASSWORD_DEFAULT);

// // echo $hash;


// if ( password_verify("123456" , $hash)) {

//     echo "Parol dogrudur"; 

// }    

    

// date()

// strtotime()

// time()

// echo date ("Y-m-d H:i:s");


// defined()

// define ("PI",3.14);

// if (defined ("PI") ) {
//     echo "PI deyeri: " . PI;

// } else {

//     echo "PI deyeri teyin olunmayib";

// }




// echo sqrt(9);

// echo pow(9,2);






// rand()-funksiyasi gosterilen araliqda (ve ya standart olaraq tesadufi) tam eded yaradir.



// $arr = ['red','green','blue','yellow','black','white','orange','purple'];

// echo $arr[      rand(0,           count($arr)-1)         ];

$length=rand(5,10);

$array=[];

for ($i=0;    $i<$length;     $i++){

    $array[] = rand(1,100);

}

echo "<pre>";
    print_r($array);
echo"</pre>";