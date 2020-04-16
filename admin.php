<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Login Admin</title>
</head>
<body>
<div class="container">
<form method="post" class="container" style="width:30%; margin-top:11%; box-shadow: 0 3px 20px rgba(0,0,0,0.5); padding:40px;">
<h4 class="text-center" >Login Admin</h4>
<hr>
<div class="form-grup">
<label>Username</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fas fa-user"></i></div>
</div>
<input type="text" class="form-control" name="username"/>
</div>
</div>
<div class="form-grup">
<label>Password</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fas fa-unlock-alt"></i>
</div>
<input type="password" name="password" class="form-control" >
</div>
</div>
<td><input type="submit" name="login" value="Login" class="btn btn-primary" style="width:30%;" /></td></td>
</form>
</div>
<?php
session_start();
$_SESSION["username"]="admin";
$_SESSION["password"]="decartun";
if (isset($_POST["login"])){
    if ($_POST["username"]=="admin" && $_POST["password"]=="admincinema"){
        header("location:CRUD.php");
    }else{
        echo"Maaf Username Atau Password Salah !";
    }
}
?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>