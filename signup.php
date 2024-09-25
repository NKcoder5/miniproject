<?php
$registered=0;
$userexists=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
  include 'live.php';
  $name=$_POST['name'];
  $password=$_POST['password'];

  $sql="SELECT * FROM signup WHERE username='$name'";
  $result=mysqli_query($con,$sql);
  if($result)
  {
    $num=mysqli_num_rows($result);
    if($num>0)
    {
      $userexists=1;
    }
    else{
      $sql="INSERT INTO signup (username,pass) VALUES('$name','$password')";
      $result=mysqli_query($con,$sql);
      if($result)
      {
        $registered=1;
      }
      else
      {
        die(mysqli_error($con));
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN-UP PAGE</title>
    <link rel="stylesheet" href="bvideo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <video autoplay loop muted class="bvideo"><source src="calm.mp4" type="video/mp4"></video>
</head>
<body>
<?php
  if($userexists){
    echo'<br><br><br><div class="alert alert-danger"role="button">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Error!</strong>&nbsp;User exists
    </div>';
  }
  ?>
  <?php
  if($registered)
  {
    echo'<br><br><br><div class="alert alert-success"role="button">
    <strong>Congrats!</strong>&nbsp;You successfully created.
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>';
  }
  ?>
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top" style="position:fixed;top:0;width:100%">
  <div class="container-fluid">
    <a class="navbar-brand" href="logo.png"><img src="logo.png" alt="Avatar Logo" style="width:80px;" class="rounded-circle"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="music_fondoom-support1.php">LIBRARY-1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="music_fondoom-support2.php">LIBRARY-2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="signup.php">SIGN UP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">LOGIN</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>
<h1 class="text-white content" style="margin-top:100px;background-color:darkslateblue"><center><b>SIGN-UP  PAGE</b></center></h1><br>
    <div class="p-3 rounded content2" style="width:50%;margin-top:150px;right:350px;background-image:url('imbg.jpg');background-repeat:no-repeat;background-attachment:fixed;background-size:cover">
    <center>
    <form action="signup.php" method="post">
        <div class="mb-3 mt-3">
            <label for="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="name" id="name" placeholder="Enter name" name="name">
            </label>
          </div><br>
        <div class="mb-3">
          <label for="pwd"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</b>&nbsp;
          <input type="password" id="password" placeholder="Enter password" name="password"></label>
        </div><br>
        <input type="submit" value="submit">
      </form></center></div>
      <div style="margin-top:400px;">
    <div class="mt-1 content2" style="width:100%">
    <div class="mt-4 p-5 bg-dark text-white rounded">
      <p><img src="logo.png" alt="Avatar Logo" style="width:100px;" class="rounded-circle"><p style="text-align:end;">
      <a href="conta.txt" style="color:white;text-decoration:none"><b>CONTACT US</b></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="about.txt" style="color:white;text-decoration:none"><b>ABOUT US</b></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="signup.php" style="color:white;text-decoration:none"><b>SIGN-UP</b></a>&nbsp;&nbsp;|&nbsp;&nbsp;<b><a href="login.php" style="color:white;text-decoration:none">LOGIN</a></b>
      </p></p>
      <hr style="width:100%;height:2px;background-color:white;">&nbsp;&nbsp;&nbsp;&nbsp;
      <center><a href="www.instagram.com"><img src="logo1.png" alt="Avatar Logo" style="width:80px;" class="rounded-pill"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="www.facebook.com"><img src="logo2.png" alt="Avatar Logo" style="width:80px;" class="rounded-pill"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="www.twitter.com"><img src="logo3.png" alt="Avatar Logo" style="width:80px;" class="rounded-pill"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="www.whatsapp.com"><img src="logo4.png" alt="Avatar Logo" style="width:80px;" class="rounded-pill"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="www.spotify.com"><img src="spot.jpg" alt="Avatar Logo" style="width:80px;" class="rounded-pill"></a></center>
     </div>
    </div></div>
</body>
</html>