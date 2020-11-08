<?php 
include 'header.php';
require 'ubc_admins/config/config.php';

$take=mysqli_query($conn,"SELECT * FROM audio_table");
$numberofrow=mysqli_num_rows($take);
$row=mysqli_fetch_all($take, MYSQLI_ASSOC);





 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>


  <!-- sermon div -->
          <!-- <div class=""> -->
          	<br><br><br>
             <h2 class="text-center mt-4 ubc-evnts">SERMON</h2>
             <?php if($numberofrow!=0){foreach($row as $value){ ?> 

             <div class="row justify-content-center mt-3">

               <div class="col-md-8 col-sm-6 col-lg-8">
                  <div class="bg-light shadow-sm">
                    <div class="card-body">
                        <div class="row no-gutters mx-auto">
                          <div class="col-sm-3">
                            <div class="music-hold">
                               <i class="fa fa-music text-icon text-center ml-4 mt-2"></i>
                            </div>
                          </div>
                          <div class="col-lg-8 col-sm-8">
                              <h5 class="card-text ubc-audio-tilte"><?php echo $value['audio_tittle'];?> .</h5>
                              <div class="">
                                  <audio src="ubc_admins/dashboard/<?php echo $value['audio_file'];?>" controls style="height: 30px; background-color: inherit;"></audio>
                                   <h5>preacher: <i><?php echo $value['audio_description'];?></i> </h5> 
       <p>Date: <em style="color: black"><?php echo $value['audio_date'];?> </em></p> 

                                  <!-- <div class="clearfix"> -->
                                    <a href="/images/myw3schoolsimage.jpg" class="float-right clearfix ubc-download"><i class="fa fa-download"></i></a>
                                  <!-- </div> -->
                              </div>
                          </div>
                        </div>
                    </div>
                  </div>
               </div>
             </div>
               <?php } }else if($numberofrow==0) { ?>
                     <p ><h2 class="text-center text-danger">No any audio at the momment</h2></p>
              <?php } ?>

             <!-- <h2 class="typed mt-5" data-text="Lorem ipsum you and .">Lorem ipsum you and .</h2> -->
          </div>

         <?php include 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
</body>
</html>