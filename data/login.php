<?php
include "admin123/admin/config.php";

if(@$_SESSION['STATUS_LOGIN'] == "OKE"){
    header("location:index.php");
}

if(@$_POST['submit']){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = "SELECT * FROM user where username = '$username' and password = md5('$password') limit 1";
    $get = query($cek);

    // echo print_r($get);die;

    if($get){
        // login berhasil

        $_SESSION["STATUS_LOGIN"] = "OKE";
        $_SESSION["AUTH_USERNAME"] = $get[0]['username'];
        $_SESSION["AUTH_NAMA"] = $get[0]['nama'];

        header("location:index.php");
    }else{
        // akun tidak ditemukan
        echo "<script>alert('Username Atau Password Salah');window.history.back();</script>";die;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Account</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../img/raffidevbulet.png" type="image/x-icon">
    <link rel="stylesheet" href="./node_modules/@sweetalert2/theme-borderless/borderless.css"> 
</head>
<body>
    <div class="box">
      <form autocomplete="off" action="" method="POST">
        <h2>SIGN IN</h2>
        <div class="inputBox">
          <input type="username" name="username" required=autocomplete="off">
          <span>Username</span>
          <i></i>
        </div>
        <div class="inputBox">
          <input type="password" name="password" required=autocomplete="off">
          <span>Password</span>
          <i></i>
        </div>
        <div class="links">
          <a href="https://discord.com/users/847710668005572610">Forgot Password ?</a>
          <a href="register.php">Sign Up</a>
        </div>
        <input type="submit" name="submit" value="Login">
      </form>
    </div>
  </body>

<!-- JS -->
<script src="/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
</html>