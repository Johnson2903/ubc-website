
 <?php
session_start();
require '../config/config.php';
 include 'topnavbar.php';

$name=$_SESSION['name'];
$admin_id=$_SESSION['id'];


$take=mysqli_query($conn,"SELECT * FROM article_id WHERE admin_id='$admin_id'");
$numberofrow=mysqli_num_rows($take);
$row=mysqli_fetch_all($take, MYSQLI_ASSOC);

  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>upload</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body style="background:#343A5460">
<div class="card col-md-5 offset-md-4 p-2 mt-3 bg-white">
    <div class="card-header bg-dark text-white text-center mb-1">Fill details</div>
<form action="articleupload.php" method="POST" class="form ml-5 mr-5 mt-4" enctype="multipart/form-data">
 <div class="form-group ">
 <div class="form-group">
      <label for=""><h5>News Heading <span style="color:red">*</span></h5></label>

  <textarea class="form-control"  id="comment"  name="tittle" required></textarea>

    
    </div>
</div>
<label for="pic"><h5>Upload Picture  <span style="color:red">*</span></h5></label>
<input type="file" name="picture" class="form-control"  id="" required onchange="loadfile(event)" > <br>
<div class="card">
<img class="card-img-top" id="output" src="uploads/backblue.gif" width="200px" alt="Card image">
</div>
     
    <!-- </div> -->
    <br> <br>

    <div class="form-group">
      <label for=""><h5>Article  <span style="color:red">*</span></h5></label>

  <textarea class="form-control"  id="comment"  name="content" required style="width: 100%;height: 300px"></textarea>

    
    </div>
  <button type="submit" name="submit" class="form-control btn btn-primary">Upload</button> 

  </div> 

  
</form>

<br><br>
<div class=" container row">
	<?php foreach($row as $value){ ?> 
		
	<div class="col-md-6">
		<div class="card shadow m-3">
  <div class="card-header" style="background-color:purple; color:white"><h2 style=""><?php echo $value['article_heading'];?> </h2>
  <p><?php echo $value['date'];?> </p>
  </div>
  <div class="card" style="width:">
    <img class="card-img-top" src="<?php echo $value['article_image'];?>" alt="Card image" style="width:100%; height: 200px">
    <div class="card-body">

      <!-- <h4 class="card-title">John Doe</h4> -->
      <p class="card-text"><?php echo substr($value['article'],0,70) . '........'?>
      	<a href="articledelete.php?id= <?php echo $value['artticle_id'] ?>" class="text-primary">read more</a>
      </p>
      <!-- <a href="#" class="btn btn-primary">read more</a> -->
      <a href="articledelete.php?id= <?php echo $value['article_id'] ?>" class="btn btn-danger">delete</a>


    </div>
  </div>
</div>
</div>
<?php }?>

<!-- 
  <div class="col-md-5">
  <h2>Card Image</h2>
  <p>Image at the top (card-img-top):</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
</div> -->
</div>





<script type="text/javascript">
 function loadfile() {
var image = document.getElementById('output');
image.src = URL.createObjectURL(event.target.files[0]);
            
  }

          
          
</script> 
   
  </body>
</html>