<?php 
require 'ubc_admins/config/config.php';
include 'header.php';


$take=mysqli_query($conn,"SELECT * FROM article_id");
$numberofrow=mysqli_num_rows($take);
$row=mysqli_fetch_all($take, MYSQLI_ASSOC);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>sermon</title>
 	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
 </head>
 <body>
<br>
 <h2 class="text-center mt-4 ubc-evnts" style="background-color: #DA251D;color: white; width: %; margin-top: -100px">BLOG</h2>
<div class=" container row">
	<?php foreach($row as $value){ ?> 
		
	<div class="col-md-6">
		<div class="card shadow m-3">
  <div class="card-header" style="background-color:purple; color:white"><h2 style=""><?php echo $value['article_heading'];?> </h2>
  <p><?php echo $value['date'];?> </p>
  </div>
  <div class="card" style="width:">
    <img class="card-img-top" src="ubc_admins/dashboard/<?php echo $value['article_image'];?>" alt="Card image" style="width:100%; height: 200px">
    <div class="card-body">

      <!-- <h4 class="card-title">John Doe</h4> -->
      <p class="card-text"><?php echo substr($value['article'],0,100) . '........'?>
      	<a href="more.php?id=<?php echo $value['article_id']?>" class="text-primary">read more</a>
      </p>
      <!-- <a href="#" class="btn btn-primary">read more</a> -->
      

    </div>
  </div>
</div>
</div>

<?php }?> 
</div>




 </body>
 </html>

<?php 
 include "footer.php";
 ?>