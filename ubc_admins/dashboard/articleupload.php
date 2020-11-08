<?php
require ('../config/config.php');
session_start();


$myfiles=$_FILES["picture"]["name"];
$tmp_myfiles=$_FILES["picture"]["tmp_name"];
$myfiles_size=$_FILES["picture"]["size"];
$title =$_POST["tittle"];
$article =$_POST['content'];
$key= $_SESSION['id'];

$target_dir = "uploads/picture/";

$img_ext = explode(".", $myfiles);
$img_ext = $img_ext["1"];


if($img_ext == "JPG" || $img_ext == "jpg" || $img_ext == "JPEG" || $img_ext == "jpeg" || $img_ext == "PNG" || $img_ext == "png")
{move_uploaded_file($tmp_myfiles, "$target_dir/$myfiles");
$take=mysqli_query($conn,"INSERT INTO article_id(article_heading,article,article_image,admin_id)VALUE('$title','$article','$target_dir/$myfiles','$key')");

         if($take){
            echo "File upload successful";
     header("location: article.php"); 

         }else{
             echo mysqli_error($conn);
     // header("location: upload.php"); 


         };

         }else {
        echo "File is not an image.";
     header("location: article.php"); 
        
    };







// if(isset($_POST["Submit"])){

//     } 
// }






?>