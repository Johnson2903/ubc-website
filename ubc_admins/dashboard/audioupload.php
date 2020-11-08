<?php 
require "../config/config.php";
session_start();
$rand = rand(10,100);
$streplaceFileName = ($_FILES['audioFile']['name']);
$audioFile = $rand."-".$streplaceFileName;
$ds = DIRECTORY_SEPARATOR;
$storeFolder = 'uploads/audio/';
$title= $_POST['tittle'];
$description= $_POST['description'];
$admin_id=$_SESSION['id'];


if((!empty($_FILES)) && !empty($_FILES['audioFile']['name'])) {
if(preg_match('/[.](mp3)|(mp4)$/', $_FILES['audioFile']['name'])){
$filename = $rand . "-" . $streplaceFileName;
$tempFile = $_FILES['audioFile']['tmp_name'];
$targetPath = $storeFolder . $ds;
$targetFile = $targetPath.$filename;

 move_uploaded_file($tempFile,$targetFile);
 $check =mysqli_query($conn,"INSERT INTO audio_table(audio_file,audio_tittle,audio_description,admin_id)value
 ('$storeFolder/$audioFile','$title','$description','$admin_id')");
if($check){
    echo "File Uploaded Successfully!";
     header("location: audio.php"); 
        
    


} else{
    echo mysqli_error($conn);
}
}
}


?>