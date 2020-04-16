<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Welcome</title>
</head>
<body id="page-top">
<!-- Navs -->
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
<!-- Navs -->
<!-- caur -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active" >
      <img src="p.jpg" class="d-block w-100" alt="..." style="margin-top:-1vw;">
      <div class="carousel-caption d-none d-md-block">
      
    <h1 class="display-4 font-weight-bold"style="color:white; margin-top:-450px;">Find Your Favorite Movie</h1>
    <p class="lead" style="color:white;">Cari film yang kamu cari dan bergabunglah di website kami untuk melihat film yang telah anda beli.</p>
    <hr class="my-4" style="border-color:white; width:7vw; border-width:1,5vw;" >
    <a class="btn btn-primary btn-lg font-weight-bold" style="border:none; border-radius:25vw; padding-right:2vw; padding-left:2vw; padding-top:0vw; margin-top:9vw;" href="login.php" role="button">Login</a>
    <p style="color:white;">@Copyright2020.</p>
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="q.jpg" class="d-block w-100" alt="..." style="margin-top:-1vw;">
      <div class="carousel-caption d-none d-md-block">
      
    <h1 class="display-4 font-weight-bold "style="color:white; margin-top:-450px;">You can buy ticket in here.</h1>
    <p class="lead" style="color:white;">Cari film yang kamu cari dan bergabunglah di website kami untuk melihat film yang telah anda beli.</p>
    <hr class="my-4" style="border-color:white; width:7vw; border-width:1,5vw;" >
    <a class="btn btn-primary btn-lg font-weight-bold" style="border:none; border-radius:25vw; padding-right:2vw; padding-left:2vw; padding-top:0vw; margin-top:9vw;" href="genre.php" role="button">Lebih Lanjut</a>
    <p style="color:white;">@Copyright2020.</p>
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="r.jpg" class="d-block w-100" alt="..." style="margin-top:-1vw;">
      <div class="carousel-caption d-none d-md-block">
      
    <h1 class="display-4 font-weight-bold"style="color:white; margin-top:-450px;">Come Join With Us!!.</h1>
    <p class="lead" style="color:white;">Cari film yang kamu cari dan bergabunglah di website kami untuk melihat film yang telah anda beli.</p>
    <hr class="my-4" style="border-color:white; width:7vw; border-width:1,5vw;" >
    <a class="btn btn-primary btn-lg font-weight-bold" style="border:none; border-radius:25vw; padding-right:2vw; padding-left:2vw; padding-top:0vw; margin-top:9vw;" href="#" role="button">Lebih Lanjut</a>
    <p style="color:white;">@Copyright2020.</p>
       
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- caur -->
<!-- Layout -->

<div class="container" >
 <div class="row">
  <div class="col text-center">
    <h1>About</h1>
 </div>
</div>
  <div class="row">
    <p>This website was created so that user is easier to buy movie tickets 
         that are in any cinema. and is not subject to additional charges.</p>
 </div>
</div>
<!-- layout -->
<!-- Upcoming -->
<div class="container">
<div class="col text-center">
<h1><span class="badge badge-warning">Now Showing In Everywhere</span></h1>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Empty!</strong> Film ditunda sampai Indonesia membaik (GWS Indonesia!)
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<h1><span class="badge badge-warning">Upcoming</span></h1>
</div>
</div>
<!-- Gambar-->
<div class="container">
  <div class="row">
    <div class="col"><img src="film1.jpg"></div>
    <div class="col"><img src="film2.jpg"></div>
    <div class="col"><img src="film3.jpg"></div>
  </div>
<!-- Gambar -->
<!-- Fotter -->
<br/><br/>
  <div class="card-body bg-light">
    <h5 class="card-title">Profile</h5>
    <p class="card-text">© 1999-2012 21Cineplex.com. All materials and contents (texts, graphics, and every attributes) of 21Cineplex or 21Cineplex.com website are copyrights and trademarks of PT Nusantara Sejahtera Raya.
Any commercial usage of the materials and contents is forbidden without prior permission from PT Nusantara Sejahtera Raya. There is no other institutions/agencies outside
PT Nusantara Sejahtera Raya allowed to use www.21Cineplex.com (21Cineplex website) without prior permission from PT Nusantara Sejahtera Raya </p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
<!-- Fotter -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>