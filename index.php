<?php 
require ('ubc_admins/config/config.php');
// include 'header.php';
$take=mysqli_query($conn,"SELECT * FROM event_table LIMIT 2");
$numberofrow=mysqli_num_rows($take);
$row=mysqli_fetch_all($take, MYSQLI_ASSOC);

$took=mysqli_query($conn,"SELECT * FROM audio_table ORDER BY audio_id DESC LIMIT 1");
$numofrow=mysqli_num_rows($took);
$roww=mysqli_fetch_all($took, MYSQLI_ASSOC);

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>ubogbomoso</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>  
</head>
<body>
  

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions round" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                  </ol>
            </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                  <img src="pics/ch1.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption caro-cap d-md-block" id="caption">
                    <h1 class="text-head">Welcome's God! Chosen Treasure</h1>
                    <!-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
                  </div>
                </div>
                <div class="carousel-item" data-interval="2000">
                  <img src="pics/ch2.jpg" class="d-block" alt="..." width="" height="100px">
                  <div class="carousel-caption caro-cap d-md-block">
                    <h1 class="text-head">Welcome's God! Chosen Treasure</h1>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                  </div>
                </div>
                <div class="carousel-item" data-interval="1000">
                  <img src="pics/worship1.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption caro-cap d-md-block">
                    <h1 class="text-head">Welcome's God! Chosen Treasure</h1>
                    <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
                  </div>
                </div>
              </div>
              <div class="container">
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
    </div>
    <!-- <div class="container">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam corporis voluptatibus eaque dicta suscipit porro ratione quae non debitis molestias, magnam tenetur nihil consequatur pariatur. Vitae accusamus eius sit aut.
    </div> -->
    <main>
        <div class="container">
          <div class="row justify-content-center  mt-5">
            <div class="col-md-6 col-xl-6 clearfix">
              <div class="text-center">
               <marquee> <h2 class="ubc-h2 text-danger">WELCOME TO ROYAL PRIESTHOOD.</h2> </marquee>
               
                <p><i class="fa fa-arrow-down mt-2"></i></p>
                <h2 class="ubc-evnts">OUR SERVICES</h2>
              </div>
              
            </div>
          </div>
          <div class="row justify-content-center mt-3">
            <div class="col-md-10 col-xs-10">
              <div class="">
                <div class="card-body">
                  <div class="row mx-auto">
                    <div class="col-md-4 col-xs-4 col-lg-4 mt-1">
                      <div class="bg-light shadow-sm">
                        <div class="card-body bg-danger">
                          <h3 class="text-center ubc-service-day">First Service</h3>
                          <div class="text-center text-white">7am-9am</div>
                          <div class="text-center text-white">Every week</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-xs-4 col-lg-4 mt-2">
                      <div class="shadow-sm" style="background-color: pink">
                        <div class="card-body">
                          <h3 class="text-center ubc-service-day">Sunday School</h3>
                          <div class="text-center">9am-10am</div>
                          <div class="text-center">Every week</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-xs-4  col-lg-4 mt-1">
                      <div class="bg-light shadow-sm">
                        <div class="card-body bg-danger">
                          <h3 class="text-center ubc-service-day">Second Service</h3>
                          <div class="text-center text-white">10am-12pm</div>
                          <div class="text-center text-white">Every week</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


<!-- another row for flyer -->
<div class=" container row">
<?php foreach($row as $value){?> 
  <div class="col-md-6">

   <div class="card" style="width:400px">
    <img class="card-img-top" src="ubc_admins/dashboard/<?php echo $value['event_flyer'];?>" alt="Card image" style="width:100%">
      </div>

  </div>
<?php }?> 

</div>

   



          <!-- another row for night -->
        <marquee>

          <div class="row justify-content-center mt-5" id="#abt">
            <div class="col-md-11 col-xs-11">
              <div class="shadow-md">
                <div class="card-body">
                  <div class="row mx-auto">
                    <div class="col-sm-4 mt-2 col-lg-4">
                      <div class="bg-light shadow-sm">
                        <div class="card-body">
                             <h3 class="ubc-service-day">CELEBRATION</h3>
                             <p class="mt-3">UNIVERSITY BAPTIST CHURCH</p>
                             <h2 class="mt-3 text-center text-danger">@ 25</h2>
                             <div class="read-more clearfix mt-2"><a href="">NOVEMBER</a><i class="mt-1 fa fa-chevron-right"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 mt-1">
                      <div class="bg-white shadow-sm">
                        <div class="card-body">
                             <h3 class="ubc-service-day">CELEBRATION</h3>
                             <p class="mt-3">UNIVERSITY BAPTIST CHURCH</p>
                             <h2 class="mt-3 text-center text-danger">@ 25</h2>
                             <div class="read-more clearfix mt-2"><a href="">NOVEMBER</a><i class="mt-1 fa fa-chevron-right"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 mt-2 col-lg-4 ">
                      <div class="bg-light shadow-sm">
                        <div class="card-body">
                             <h3 class="card-text ubc-service-day">CELEBRATION</h3>
                             <p class="mt-3">UNIVERSITY BAPTIST CHURCH</p>
                             <h2 class="mt-3 text-center text-danger">@ 25</h2>
                             <div class="read-more clearfix mt-2"><a href="">NOVEMBER</a><i class="mt-1 fa fa-chevron-right"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </marquee>
          <!-- sermon div -->
          <div class="">
             <h2 class="text-center mt-4 ubc-evnts">SERMON</h2>
             <?php foreach($roww as $value){ ?> 

             <div class="row justify-content-center mt-3">
               <div class="col-md-8 col-sm-6 col-lg-8 bg-danger">
                  <div class="bg-light shadow-sm">
                    <div class="card-body">
                        <div class="row no-gutters mx-auto">
                          <div class="col-sm-3">
                            <div class="music-hold">
                               <i class="fa fa-music text-icon text-center ml-4 mt-2"></i>
                            </div>
                          </div>
                          <div class="col-lg-8 col-sm-8">
                              <h5 class="card-text ubc-audio-tilte"><?php echo $value['audio_tittle'];?> </h5>
                              <div class="">
                                  <audio src="ubc_admins/dashboard/<?php echo $value['audio_file'];?>" controls style="height: 30px; background-color: inherit;"></audio>
                                  <!-- <div class="clearfix"> -->
                                    <a href="" class="float-right clearfix ubc-download"><i class="fa fa-download"></i></a>
                                  <!-- </div> -->
                              </div>
                          </div>
                        </div>
                    </div>
                  </div>
               </div>
             </div>
               <?php } ?>

             <!-- <h2 class="typed mt-5" data-text="Lorem ipsum you and .">Lorem ipsum you and .</h2> -->
          </div>
          <div class="clearfix mt-3">
            <a href="sermon.php"><button type="button" class=" sermon-btn float-right">View More</button></a>
          </div>
          <!-- sermon div end here -->
          <!-- blog div start here -->
          <h2 class="text-center mt-4 ubc-evnts">BLOG</h2>
          <div class="row justify-content-center mt-5">
            <div class="col-xl-11 col-lg-12 col-md-10">
                <div class="row no-guiter">
                  <div class="col-md-6">
                  <?php 
                  $took=mysqli_query($conn,"SELECT * FROM article_id  LIMIT 1");
                  // $numofrow=mysqli_num_rows($took);
                  $roww=mysqli_fetch_array($took);
                  ?>
                    <div class="card border-0 shadow-sm">
                      <img class="card-img-top" src="ubc_admins/dashboard/<?php echo $roww['article_image'];?>" alt="Card image" style="width:100%; height: 25vh;">
                      <h6 class="card-text mb-2 blog-title"><?php echo $roww['article_heading'];?></h6>
                      <div class="card-body">
                      <p class="card-text"><?php echo substr($roww['article'],0,70) . '........'?>
                        <div class="clearfix read-more"><a href="more.php?id=<?php echo $roww['article_id']?>" class="float-right">Continue Reading</a></div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="col-md-6 shadow-md">
                    <div class="card border-0">
                      <div class="card-body">
                        
                    <?php
                     $tok=mysqli_query($conn,"SELECT * FROM article_id ORDER BY article_id DESC LIMIT 2");
                     $numberrow=mysqli_num_rows($took);
                    //  $myrow=mysqli_fetch_array($took);
                if($numberrow!==0){
while ($va = mysqli_fetch_array($tok))  
{?>
                        <div class="row no-gutters align-items-center shadow-sm">

                          <div class="col-md-4">
                            <img class="card-img-top" src="ubc_admins/dashboard/<?php echo $va['article_image'];?>" alt="Card image" style="height: 20vh;">
                          </div>
                          <div class="ml-2 col-md-6">
                              <!-- <div class=""> -->
                                  <h6 class="card-text mb-2 blog-title"><?php echo $va['article_heading'];?></h6>
                                  <p><?php echo substr($va['article'],0,100) . '...'?></p>
                        <div class="clearfix read-more"><a href="more.php?id=<?php echo $va['article_id']?>" class="float-right">Continue Reading</a></div>

                              <!-- </div> -->
                          </div>
                        </div>
                        <?php      
    }
}?>

                        <!-- <div class="row no-gutters align-items-center shadow-sm mt-2">
                          <div class="col-md-4">
                            <img class="card-img-top" src="pics/bk1.jpg" alt="Card image" style="height: 20vh;">
                          </div>
                          <div class="ml-2 col-md-6">
                            <div class="">
                              <h6 class="card-text blog-title">you</h6>
                              <p>laborum rem perferendis, voluptate </p>
                            
                          </div>
                          </div>
                        </div> -->
                      
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
           <div class="clearfix mt-3">
            <a href="blog.php"><button type="button" class=" sermon-btn float-right">View More</button></a>
          </div>
    </main>

          <!-- blog end here -->
        
        <!-- container end div...... -->
        <?php include 'footer.php'; ?>

        
        </div>
         <a href="#" class="back-to-top" style="border: 2px solid white;"><i class="fa fa-chevron-up"></i></a>
    <h2 class="typed" data-text="Lorem ipsum you and ."></h2>

</body>
</html>