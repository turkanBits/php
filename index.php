<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- sol teref acarlar    sag teref deyerler -->
     <!-- print sade stringler ucundur   print r ise arraylari ve obyektleri cap etmek ucundur -->
      <!-- oz yazdigimiz acarlar varsa obyektdir   proqram ozu teyin edirse arraydir -->
<?php

// echo "hemide turkan";

//   echo "<pre>"; 
//       print_r(
//           [
//                'ad'=> 'Ali',
//                'soyad'=> 'Veli',
//                 'yas'=> 30
//           ]
//       );
//      echo "<pre>";
    
    // sprint funksiyasi ile deger yazdirmaq olur,echo ile arasindaki ferq odur ki sprintf funkisyasi deyer qaytarir echo ise qaytarmir
                //  string               deyer
//   sprintf("Ad: %s,Soyad: s%, Yas:%d", "Ali","Veli",30);  

//    file_put_contents -herhansisa bir fayl yaradib icerisine metin cap etmek ucun istifade olunur

    //   file_put_contents('test.text' , "Hello World");

   
    //   $name="Ali";
    //   $age=20;
    //   $isActive=true;
    //   $balance=100.50;
    //   $x=null;
     
    //    $var1=$var2=$var3= "Hello World";   birden cox deyisken qebul ede bilir
     
    //  en son verilen deyer evvl verilen deyerin uzerine yazilir

    // $name="Ali";
    // $name="Veli";     

    // echo $name;



    // const - kodda deyismez demekdir.const -la teyin edilen deyeri deyismek mumkun deyil
 
    //  const PI=3.14;

    //  echo PI;

    // const hem global hem class icinde istifade edilir ancaq funksiya icinde istifade edilmez
    // define() hem global hemde funskiya icinde istifade edilir ancaq class icinde istifade edile bilmez
     
    // 
    
    
// tek dirnaq icersine degiskenler yazila bilmez,\n ise yeni setr simvoludur

  
    
    // cut dirnaq icersinde degiskenler yazila biler \n ise yeni setir simvoludur

    // EOL-heredok cox setrli metnler ucun istifade olunur alt alt metnleri ekrana cap etmek ucun istifade olunur

    // $metn2='Bob';

    // $ekranaYazdir = <<<EOL
    // Salam $metn2 sdhfosif
    // fdsojabgfdl
    // segahkrjdsf'
    // sdagfvnakas
    // fashvfslkdf
    // sdvjadf;
    // EOL;

    // echo $ekranaYazdir; 
   
   
 // arraya ozumzude deyer teyin ede bilirik proqramda deyer teyin ede bilir
    // $var1=6;
    // $var2=3.14;
    // $var3=true;
    // $var4='Ali';
    // $var5=[];

    // echo gettype($var1) . "<br>";
    // echo gettype($var2) . "<br>";
    // echo gettype($var3) . "<br>";
    // echo gettype($var4) . "<br>";
    // echo gettype($var5) . "<br>";


//    OPEARTORLAR
    // toplama
   $result1 =5+3;  

//    cixma
   $result2 =5-3;

//    vurma
   $result3 =5*3;

//    bolme
   $result4 =5/3;

//    qaliqli bolme
   $result5 =5%3;

   print ("Toplama:" . $result1 . "<br>");
   print ("Cixma:" . $result2 . "<br>");
   print ("Vurma:" . $result3 . "<br>");
   print ("Bolme:" .  $result4 . "<br>");
   print ("Mod:" .  $result5 . "<br>");




?>


<!-- <script>
    let a = {
        'ad': 'Ali'
      'soyad':'Veli'    JAVA SCRIPT
      'yas': 30
    }
</script> -->




</body>
</html>