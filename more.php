<?php 
include 'header.php';
require 'ubc_admins/config/config.php';
$key=$_GET['id'];
$take=mysqli_query($conn,"SELECT * FROM article_id WHERE article_id=$key");
// $numberofrow=mysqli_num_rows($take);
// $row=mysqli_fetch_all($take, MYSQLI_ASSOC);
$row = mysqli_fetch_array($take);





 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<br><br><br>
 <h2 class="text-center mt-4 ubc-evnts" style="background-color: #DA251D;color: white; width: %; margin-top: -100px">BLOG</h2>
 <br><br>
 	<div class="container">
 		<div class="card">
 			<div class="card-heaer">
 				<div class="card-header" style="background-color:purple; color:white"><h2 style=""><?php echo $row['article_heading'];?> </h2>
 					<br>
 					<span>posted on <?php echo $row['date'];?> </span>
 					<div class="card-img-top">
                   <img class="card-img-top" src="ubc_admins/dashboard/<?php echo $row['article_image'];?>" alt="Card image" style="width:%; height:">
 						
 					</div>
			</div>
			 <div style="color: #000000; font-family: arial; font-size: 20px">

 			<?php echo $row['article']?>
 		</div>
 		

 	</div>
 	</div>

 	</div>
<br><br><br>
 	<form>
 		<div class="mt-3 ml-5">
 			<textarea style="height: 400px; width: 50%;  border-radius: 20px" placeholder="LEAVE COMMENT"></textarea>
 		</div>
 		 <div class="clearfix mt-3">
            <a href="sermon.php"><button type="button" class=" sermon-btn float-right">Submit</button></a>
          </div>
 	</form>

 	<?php include "footer.php" ?>
 
 </body>
 </html>