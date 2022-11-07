<?php
include "admin123/admin/config.php";

if(@$_POST['submit']){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];

    $cek = "SELECT * FROM user where username = '$username'";
    $get = query($cek);

    // echo print_r($get);die;

    if(!$get){
        // register

        $query = "INSERT into user (username, password, nama) values ('$username', md5('$password'), '$nama')";

        $insert = mysqli_query($conn, $query);

        if($insert){
            // successfuly insert
            echo "<script>alert('Successfully created an account');document.location.href = 'login.php'</script>";die;
        }else{
            // failed to insert
            echo "<script>alert('Failed to create an account');window.history.back();</script>";die;
        }
    }else{
        // username already registered
        echo "<script>alert('Username already registered');window.history.back();</script>";die;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <link rel="stylesheet" href="../css/register.css">
    <link rel="shortcut icon" href="../img/raffidevbulet.png" type="image/x-icon">
    <link rel="stylesheet" href="./node_modules/@sweetalert2/theme-borderless/borderless.css"> 
</head>
<body>
    <div class="box">
      <form autocomplete="off" action="" method="POST">
        <h2>SIGN UP</h2>
        <div class="inputBox">
          <input type="username" name="username" required=autocomplete="off">
          <span>Username</span>
          <i></i>
        </div>
        <div class="inputBox">
          <input type="nama" name="nama" required=autocomplete="off">
          <span>Nama</span>
          <i></i>
        </div>
        <div class="inputBox">
          <input type="password" name="password" required=autocomplete="off">
          <span>Password</span>
          <i></i>
        </div>
        <div class="links">
          <a href=""></a>
          <a href="login.php">Already Sign In?</a>
        </div>
        <input type="submit" name="submit" value="Register">
      </form>
    </div>
  </body>

<!-- JS -->
<script src="/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
</html>