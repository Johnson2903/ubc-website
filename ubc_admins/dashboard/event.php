<?php 
require '../config/config.php';
session_start();
include 'topnavbar.php';

$admin= $_SESSION['id'];

$take=mysqli_query($conn,"SELECT * FROM event_table WHERE $admin=$admin");
$numberofrow=mysqli_num_rows($take);
$row=mysqli_fetch_all($take, MYSQLI_ASSOC);
// echo $admin;
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<div class="card col-md-5 offset-md-4 p-2 mt-3 bg-white">
    <div class="card-header bg-dark text-white text-center mb-1">upload flyer here</div>
<form action="eventprocess.php" method="POST" class="form ml-5 mr-5 mt-4" enctype="multipart/form-data">
<input type="file" name="picture" class="form-control"  id="" required onchange="loadfile(event)" > <br>
<div class="card">
<img class="card-img-top" id="output" src="uploads/backblue.gif" width="200px" alt="Card image">

</div>
<div>
  <button type="submit" name="submit" class="form-control btn btn-primary">Upload</button> 

  </div> 
</form>

</div>
    <br> <br><br>

<div class=" container row">
 <?php foreach($row as $value){?> 
<div class="col-md-6">
   <div class="card" style="width:400px">
    <img class="card-img-top" src="<?php echo $value['event_flyer'];?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary stretched-link">See Profile</a>
    </div>
  </div>
  </div>

<?php }?> 
   </div>
  



<script type="text/javascript">
 function loadfile() {
var image = document.getElementById('output');
image.src = URL.createObjectURL(event.target.files[0]);
            
  }
</script> 
</body>
</html>