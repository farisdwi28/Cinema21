<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico">
    <title>About Us</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="mainNav">
<div class="container">
  <a class="navbar-brand text-danger font-weight-bold" href="#page-top">Cinema XXI</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link js-scroll-trigger text-danger" href="home.php">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-danger" href="#genre" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Genre
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="action.php">Action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="horor.php">Horror</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="wibu.php">Comedy</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger text-danger " href="kami.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger text-danger" href="admin.php">Admin</a>
      </li>
        <li>
        <i class="fab fa-instagram text-danger ml-3 mt-2"></i>
        <i class="fab fa-whatsapp text-danger ml-3 mt-2"></i>
      <i class="fas fa-user text-danger ml-3 mt-2" style="box-shadows: 0 3px 3px; ">
      <?php 
      session_start();
      echo $_SESSION['username'];?></i>
      </li>
    </ul>
  </div>
  </div>
</nav>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slide1.jpg" class="d-block w-100" alt="..."style="margin-top:-1vw; height:20vw;">
    </div>
    <div class="carousel-item">
      <img src="slide2.jpg" class="d-block w-100" alt="..."style="margin-top:-1vw; height:20vw;">
    </div>
    <div class="carousel-item">
      <img src="slide3.jpg" class="d-block w-100" alt="..."style="margin-top:-1vw; height:20vw;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="conteiner">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">ABOUT US</h5>
    <p class="card-text">Hallo, <br/> Meet My Name Faris! This WEB Cinema XXI owner. If asked about the work, I can say I have not worked hehe, now I am still a school at SMK TELKOM MALANG whose school was very good in the field of IT already accredited  "A ".  I'm still sitting on the 10th grade bench and my I'm is 17 years old. And this is the first web work I can still in said ugly hehe.Thanks</p>
    <h4>Contact Me:</h4>
        <i class="fab fa-instagram ml-3 mt-2">:@framadhan01_</i>
        <i class="fab fa-whatsapp ml-3 mt-2">:081259673728</i>
  </div>
  <img src="slide3.jpg" class="card-img-top" alt="..." style="margin-top:-1vw; height:20vw;">
</div>    
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>