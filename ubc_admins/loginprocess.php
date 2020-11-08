<?php 
require 'config/config.php';
session_start();
 if (isset($_POST['submit'])) {
$email= filter_var($_POST['email'],FILTER_SANITIZE_STRING);
$password= filter_var($_POST['password'],FILTER_SANITIZE_STRING);



 
 $confirmlogin=mysqli_query($conn, "SELECT * FROM main_admin WHERE admin_email='$email' AND admin_passwor='$password'");
 $numberofrow=mysqli_num_rows($confirmlogin);
 // echo $numberofrow;
 if ($numberofrow==1) {
 	$row=mysqli_fetch_array($confirmlogin, MYSQLI_ASSOC);
 	// echo $row['admin_id'];
	 $_SESSION['id']=$row['admin_id'];
	 $_SESSION['name']=$row['admin_name'];
     header('location: dashboard/index.php');

 }else{
 	echo "incorrect credential";
 	header('location:index.php');
 }

 }
 ?>