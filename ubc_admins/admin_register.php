<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
</head>

<body>
<div class="card col-md-5 offset-md-4 p-2 mt-3 bg-white">
    <div class="card-header bg-dark text-white text-center mb-1"><h4>Sign-up</h4></div>
<form action="process.php" method="POST" class="form ml-5 mr-5 mt-4">
<div class="form-group ">
      <label for="inputname">Name <span style="color:red">*</span></label>
      <input type="text" class="form-control" id="inputname" name="adminname" placeholder="Name" required>
    </div><br>
    <div class="form-group ">
      <label for="inputEmail4">Email <span style="color:red">*</span></label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email" required>
    </div><br>
    <div class="form-group ">
      <label for="inputPassword4">Password  <span style="color:red">*</span> </label>
      <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="choose Password" required>
</div>

  
  <button type="submit" class="form-control btn btn-primary">Sign in</button> 
  <br>
  <span>Already have account? </span><a href="index.php">Login</a>
</form>

</div>

    
</body>
</html>