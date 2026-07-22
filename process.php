<?php

if($_SERVER['REQUEST_METHOD' ] === 'POST' ) {
    
 if(isset($_FILES['file'] ) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {

   $fileImpPath=$_FILES['file']['tmp_name'];
   $fileName=$_FILES['file']['name'];
   $fileSize=$_FILES['file']['size'];
   $fileType=$_FILES['file']['type'];

   $uploadPath = 'uploads/' . $fileName;

   if($fileSize > 3 * 1024 *1024) {
      echo "Fayl boyukdur.Maksimum 3MB ola biler.";
      exit();
   }

   if(move_uploaded_file($fileImpPath,$uploadPath) ) {
      echo "Fayl yuklendi: " .$fileName;

   }else {
      echo "Fayl yuklendikde xeta bas verdi.";
   }

} else {
   echo "Fayl yuklenmedi";
}

}
