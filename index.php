<?php
session_start();
$user = "";
if (isset($_SESSION['log'])) {
    $logged = $_SESSION['log'];
    if ($logged) {
        $user = $_SESSION['username'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSIC FONDOOM</title>
    <link rel="stylesheet" href="bvideo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <video autoplay loop muted class="bvideo"><source src="move.mp4" type="video/mp4"></video>
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top" style="position:fixed;top:0;width:100%">
  <div class="container-fluid">
    <a class="navbar-brand" href="logo.png"><img src="logo.png" alt="Avatar Logo" style="width:80px;" class="rounded-circle"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="music_fondoom-support1.php">LIBRARY-1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="music_fondoom-support2.php">LIBRARY-2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">SIGN UP</a>
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
<br><br><br><div class="alert" style="background-color:orchid" role="button">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    WELCOME&nbsp;&nbsp;<?php echo $user; ?></div>
      <div class="container-fluid mb-2 mt-3 rounded content" style="background-color:mediumorchid">
        <div class="p-3 text-white rounded">
          <div class="row">
          <div class="col-7">
              <h2><b>MUSIC FONDOOM</b></h2><br>
              <p style="font-family:sans-serif">Enjoy the latest Tamil, English, Japanese, Rap, Hindi hits and Phonks from our website. Enjoy and Vibe your fullest. We guarantee you the memorable music experience and don't forget to Subscribe and become a member of our Music Fond Family. Check our beside webpages if you want any extra guidance and help.</p> 
          </div>
          <div class="col-5"><div class="list-group-sm" style="width:550px">
        <a href="music_fondoom-support1.php" class="list-group-item list-group-item-action list-group-item-danger"><center><b>SONG LIST</b></center></a>
        <a href="music_fondoom-support1.php" class="list-group-item list-group-item-action list-group-item-success">🎼 <i>TAMIL SONGS</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- (Click to hear some TAMIL hits)</a>
        <a href="music_fondoom-support1.php" class="list-group-item list-group-item-action list-group-item-info">🎼 <i>ENGLISH SONGS</i>&nbsp;&nbsp;&nbsp;&nbsp;- (Click to hear some ENGLISH hits)</a>
        <a href="music_fondoom-support1.php" class="list-group-item list-group-item-action list-group-item-success">🎼 <i>JAPANESE SONGS</i>&nbsp; - (Click to hear some JAPANESE hits)</a>
        <a href="music_fondoom-support2.php" class="list-group-item list-group-item-action list-group-item-secondary">🎼 <i>HINDI SONGS</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- (Click to hear some HINDI hits)</a>
        <a href="music_fondoom-support2.php" class="list-group-item list-group-item-action list-group-item-warning">🎼 <i>RAP SONGS</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- (Click to hear some RAP hits)</a>
        <a href="music_fondoom-support2.php" class="list-group-item list-group-item-action list-group-item-primary">🎼 <i>PHONK SONGS</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- (Click to hear some PHONK hits)</a>
      </div></div>
      </div></div></div>
      <div id="demo" class="carousel slide" style="margin-top:250px;" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button btn-primary" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="7"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="8"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="9"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="10"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="11"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
          <center><a class="nav-link" href="music_fondoom-support1.php"><img src="caro.jpg" class="d-block" style="width:70%;height:500px;"></a></center>
          </div>
          <div class="carousel-item">
          <center><a class="nav-link" href="music_fondoom-support1.php"><img src="caro2.jpg" class="d-block" style="width:70%;height: 500px;"></a></center>
          </div>
          <div class="carousel-item">
          <center><a class="nav-link" href="music_fondoom-support1.php"><img src="caro3.jpg" class="d-block" style="width:70%;height: 500px;"></a></center>
          </div>
          <div class="carousel-item">
          <center><a class="nav-link" href="music_fondoom-support2.php"><img src="caro4.jpg" class="d-block" style="width:70%;height: 500px;"></a></center>
          </div>
          <div class="carousel-item">
          <center><a class="nav-link" href="music_fondoom-support1.php"><img src="caro5.png" class="d-block" style="width:70%;height: 500px;"></a></center>
          </div>
          <div class="carousel-item">
          <center><a class="nav-link" href="music_fondoom-support1.php"><img src="caro6.jpg" class="d-block" style="width:70%;height: 500px;"></a></center>
          </div>
          <div class="carousel-item">
          <center><a class="nav-link" href="music_fondoom-support1.php"><img src="caro7.jpg" class="d-block" style="width:70%;height: 500px;"></a></center>
          </div>
          <div class="carousel-item">
          <center><a class="nav-link" href="music_fondoom-support2.php"><img src="caro8.jpg" class="d-block" style="width:70%;height: 500px;"></a></center>
          </div>
          <div class="carousel-item">
          <center><a class="nav-link" href="music_fondoom-support2.php"><img src="caro9.webp" class="d-block" style="width:70%;height: 500px;"></a></center>
          </div>
          <div class="carousel-item">
          <center><a class="nav-link" href="music_fondoom-support2.php"><img src="caro10.jpg" class="d-block" style="width:70%;height: 500px;"></a></center>
          </div>
          <div class="carousel-item">
          <center><a class="nav-link" href="music_fondoom-support2.php"><img src="caro11.png" class="d-block" style="width:70%;height: 500px;"></a></center>
          </div>
          <div class="carousel-item">
          <center><a class="nav-link" href="music_fondoom-support2.php"><img src="caro12.jpg" class="d-block" style="width:70%;height: 500px;"></a></center>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
      <div class="mt-1 content2" style="width:100%">
    <div class="mt-4 p-5 bg-dark text-white rounded">
      <p><img src="logo.png" alt="Avatar Logo" style="width:100px;" class="rounded-circle"><p style="text-align:end;">
      <a href="conta.txt" style="color:white;text-decoration:none"><b>CONTACT US</b></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="about.txt" style="color:white;text-decoration:none"><b>ABOUT US</b></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="signup.php" style="color:white;text-decoration:none"><b>SIGN-UP</b></a>&nbsp;&nbsp;|&nbsp;&nbsp;<b><a href="login.php" style="color:white;text-decoration:none">LOGIN</a></b>
      </p></p>
      <hr style="width:100%;height:2px;background-color:white;">&nbsp;&nbsp;&nbsp;&nbsp;
      <center><a href="www.instagram.com"><img src="logo1.png" alt="Avatar Logo" style="width:80px;" class="rounded-pill"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="www.facebook.com"><img src="logo2.png" alt="Avatar Logo" style="width:80px;" class="rounded-pill"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="www.twitter.com"><img src="logo3.png" alt="Avatar Logo" style="width:80px;" class="rounded-pill"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="www.whatsapp.com"><img src="logo4.png" alt="Avatar Logo" style="width:80px;" class="rounded-pill"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="www.spotify.com"><img src="spot.jpg" alt="Avatar Logo" style="width:80px;" class="rounded-pill"></a></center>
     </div>
    </div>
</body>
</html>