<?php
session_start();
require '../config/config.php';

$name=$_SESSION['name'];
$admin_id=$_SESSION['id'];


$take=mysqli_query($conn,"SELECT * FROM audio_table WHERE admin_id='$admin_id'");
$numberofrow=mysqli_num_rows($take);
$row=mysqli_fetch_all($take, MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>
<body>
<?php include 'topnavbar.php'; ?>
  <div id="page-content-wrapper">


<div class="card col-md-6 offset-md-4 p-2 mt-3 bg-white">
<div class="card-header bg-dark text-white text-center mb-1">Fill music details</div>
<form action="audioupload.php" method="POST" class="form ml-5 mr-5 mt-4" enctype="multipart/form-data">
     <label for="audio">Upload Audio <span style="color:red">*</span></label>
     <input type="file" name="audioFile" class="form-control" accept="audio/*"> <br>
     <div class="form-group">
      <label for="">Audio Tittle  <span style="color:red">*</span></label>
      <textarea class="form-control"  id="com"  name="tittle" required></textarea>
      </div>
      <div class="form-group">
      <label for="">Audio description  <span style="color:red">*</span></label>
      <textarea class="form-control"  id="comment"  name="description" required></textarea>
     </div>
    <input type="submit" class="form-control btn-dark" name="Submit" value="Submit">
</form>
</div>

<br><br>
<?php if ($numberofrow!=0){foreach($row as $value){ ?> 
  <div class="container row">
  <div class="col-md-4">
    <div class="card shadow" style="border-radius: 3px solid purple">
      <div class="card-header" style="background-color: purple;color: white">
       <h5>Tittle: <i><?php echo $value['audio_tittle'];?></i> </h5> 
       <h5>Trecher: <i><?php echo $value['audio_description'];?></i> </h5> 
       <p>Date: <em style="color: black"><?php echo $value['audio_date'];?> </em></p> 


        </div>
        <div class="card-body">
      <audio src="<?php echo $value['audio_file'];?>" type="audio/mp3" controls="controls"></audio> 
    </div>
    <a href="audiodelete.php?id=<?php echo $value['audio_id']?>" class="btn btn-danger">delete</a>
    </div>
  </div>
 </div> 

       <?php } }else if($numberofrow==0){?>
        <p>You have not upload any audio</p>
    <?php } ?>



 
    

 <!-- </div>
</div> -->
<!-- </div> -->

<!-- </div> -->

</body>
</html>


 
 

 
  

