<?php 
session_start();
require "../config/config.php";
$article_id=$_GET['id'];
$deleteQuery = "DELETE from article_id where article_id=$article_id";
$delete = mysqli_query($conn, $deleteQuery);

if ($delete) {
   header('location:article.php');
}else{
	echo mysqli_error($conn);
}


?>