<?php
include "config/config.php";

$adminname= $_POST["adminname"];
$adminemail= $_POST["email"];
$adminpassword= $_POST["password"];
$insert=mysqli_query($conn, "INSERT INTO main_admin(admin_name,admin_email,admin_passwor) VALUE ('$adminname','$adminemail','$adminpassword')" );


if($insert){
    echo "new data added successful";
    // header("location:index.php");
}else{
    echo mysqli_error($conn);
}



?>



