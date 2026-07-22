<!DOCTYPE html>
<html lang="en">
<body>
    
    <form action="process.php"   method="post" enctype="multipart/form-data">
        <label for="">Fayli secin: </label>

          <input id="file" type="file"  name="file" requried> <br> <br>

        <button type="submit">yukle</button>
    </form>
</body>
</html>



<!-- accept -->





















<?php

// urlencode()


// nl2br()

// htmlspecialchars()

// \n


// "  a as ascd as  "


// $text = "Bu birinci setrdir.  \n Bu ikinci setrdir.  \n Bu ucuncu setrdir.   \nBu dorduncu setrdir.";

// echo nl2br ($text);



// $text2="<div>Bu \"HTML \" metnidir & tehlukesiz deyil.</div>";


// echo htmlspecialchars($text2);










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

// $length=rand(5,10);

// $array=[];

// for ($i=0;    $i<$length;     $i++){

//     $array[] = rand(1,100);

// }

// echo "<pre>";
//     print_r($array);
// echo"</pre>";


// list()

// $number=[1,2,3];

// list($a,$b,$c)=$number;

// echo $a ."<br>";
// echo $b ."<br>";
// echo $c ."<br>";

// function getUser() {


//     return ['John','Doe',30];


// }


// list($name,$username,$age)=getUser();

// echo $name . "<br>";
// echo $username . "<br>";
// echo $age . "<br>";
