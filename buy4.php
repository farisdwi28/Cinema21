<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Pemebelian</title>
</head>
<body>
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
<div class="container">
<div class="col text-center">
<h1><span class="badge badge-warning">Pembelian</span></h1>
</div>
</div>
<div class="container">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="film2.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">JEXI</h5>
        <p class="card-text">Genre: ACTION</p>
        </p>
        <br/><br/><br/><br/>
    <a href="#" class="btn btn-primary">Rp.50.000</a>
    <a href="buy1.php" class="btn btn-success">Buy</a>
      </div>
    </div>
  </div>
</div>
</div>
<br/><br/>
<div class="container">
<div class="card-body bg-light">
    <h5 class="card-title">Profile</h5>
    <p class="card-text">© 1999-2012 21Cineplex.com. All materials and contents (texts, graphics, and every attributes) of 21Cineplex or 21Cineplex.com website are copyrights and trademarks of PT Nusantara Sejahtera Raya.
Any commercial usage of the materials and contents is forbidden without prior permission from PT Nusantara Sejahtera Raya. There is no other institutions/agencies outside
PT Nusantara Sejahtera Raya allowed to use www.21Cineplex.com (21Cineplex website) without prior permission from PT Nusantara Sejahtera Raya </p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
  </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>