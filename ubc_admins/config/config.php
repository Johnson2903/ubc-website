<?php
// Development mode
// $conn = mysqli_connect('localhost','root', '', 'ubc');

// Remote SQL
$conn = mysqli_connect('remotemysql.com','CaSpnm3Y1a', '3UDHREcUba', 'CaSpnm3Y1a');

if($conn){
     // echo "connect to db successful";
}else{
     // die('unable to connect to db');
}

?>


