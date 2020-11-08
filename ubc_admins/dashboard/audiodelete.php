<?php 
session_start();
require "../config/config.php";
$audio_id=$_GET['id'];
$deleteQuery = "DELETE from audio_table where audio_id=$audio_id";
$delete = mysqli_query($conn, $deleteQuery);

if ($delete) {
   header('location:audio.php');
}else{
	echo mysqli_error($conn);
}


?>