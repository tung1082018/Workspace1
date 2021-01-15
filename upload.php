<?php
/* Getting file name */
$filename = $_FILES['file']['name'];

/* Location */
$location = "upload".DIRECTORY_SEPARATOR.$filename;
$uploadOk = 1;
$imageFileType = pathinfo($location,PATHINFO_EXTENSION);

/* Valid Extensions */
$valid_extensions = array("jpg","jpeg","png");
/* Check file extension */
if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
   $uploadOk = 0;
}
if($uploadOk == 0){
   echo 0;
}else{
   /* Upload file */
   if(move_uploaded_file($_FILES['file']['tmp_name'], realpath('').DIRECTORY_SEPARATOR.$location)){
      echo str_replace(DIRECTORY_SEPARATOR, "/", $location);
   }else{
      echo 0;
   }
}
?>