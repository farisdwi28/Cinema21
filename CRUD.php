    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
        <link rel="shortcut icon" href="favicon.ico">
        <title>Data User</title>
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
            <a class="dropdown-item" href="wibu.php">Wibu</a>
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
    <div class="row">
    <div class="col text-center" style="margin-top:2vw; margin-bottom:2vw; width:100vw;">
    <h1><span class="badge badge-dark">CRUD DATA USER</span></h1>
    </div>
    </div>
    </div>
    <div class="container">
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Current At</th>
        <th scope="col">Opsi</th>
        </tr>
    </thead>
    <?php
    include 'konek.php';
    $query = "SELECT * FROM resto";
    $data = $koneksi->query($query);
    while ($d = mysqli_fetch_array($data)){
    ?>
    <tr>
            <td><?php echo $d['id'];?></td>
            <td><?php echo $d['username'];?></td>
            <td><?php echo $d['password'];?></td>
            <td><?php echo $d['Current_at'];?></td>
            <td>
            <a href='tambah.php?id="<?php echo $d['id'];?>"'><button type="button" class="btn btn-dark">Tambah</button></a>
            <a href='update.php?id="<?php echo $d['id'];?>"'><button type="button" class="btn btn-dark">Edit</button></a>
            <a href='hapus.php?id="<?php echo $d['id'];?>"'><button type="button" class="btn btn-dark">Hapus</button></a>
            </td>
    </tr>
    <?php
    }
    ?>
    </table>    
    </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    </html>