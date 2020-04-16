<?php
require_once ("konek.php");
$username = "";
$password = "";
$usererr = "";
$passerr = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $query = "SELECT * FROM resto WHERE username = '$username'";
    $result = $koneksi->query($query);
    $row = $result->fetch_assoc();
    if(count($row)==0){
        $usererr = "AKUN TIDAQ ADA";
    }else{
        if($row['password']==$_POST['password']){
            session_start();
            $_SESSION["username"]=$_POST["username"];
            header("Location: home.php");
        }else{
            $passerr = "salah!!!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>
<div class="container" style="width:30%; margin-top:11%; box-shadow: 0 3px 20px rgba(0,0,0,0.5); padding:40px;">
<a href="home.php"><button type="submit" class="btn btn-primary" style="width:30%;">BACK</button></a>
<h4 class="text-center" >Login</h4>
<hr>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
<div class="form-grup">
<label>Username</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fas fa-user"></i></div>
</div>
<input type="text" class="form-control" name="username" value = "<?php echo $username;?>" />
<td><p><?php echo $usererr; ?></p></td>
</div>
</div>
<div class="form-grup">
<label>Password</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
<input type="password" name="password" class="form-control" >
<td><p><?php echo $passerr; ?></p></td>
</div>
</div>
<br/>
<button type="submit" class="btn btn-primary" style="width:30%;">LOGIN</button>
<a href="daftar.php" style="font-size:12px">Belum mempunyai akun?Daftar Sekarang!</a>
</form>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>