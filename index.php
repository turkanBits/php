<!-- casting(tip cevirme) -->

<?php



//    (int)


// $kesirEded=4.9;
// $tamEded=(int) $kesirEded;

// echo $tamEded;

// (int) ve intval()
// (float) ve floatval ()
// (bool) ve boolval ()
// (string) ve strval () 
// (array)

// function topla (int $a) {

// }




$num=24;

$f=(float) ($num / 2) - (int) ($num / 2);

if ($f) {
    echo "Number is odd";
} else {
    echo "Number is even";
}