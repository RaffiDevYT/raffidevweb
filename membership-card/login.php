<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN</title>
    <link rel="shortcut icon" href="../img/raffidevbulet.png" type="image/x-icon">

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <div class="box">
      <form autocomplete="off" action="" method="POST">
        <h2>SIGN IN</h2>
        <div class="inputBox">
          <input type="username" name="username" id="username" required="required autocomplete="off">
          <span>Username</span>
          <i></i>
        </div>
        <div class="inputBox">
          <input type="password" name="password" id="password" required="required autocomplete="off">
          <span>Password</span>
          <i></i>
        </div>
        <div class="links">
          <a href="https://discord.com/users/847710668005572610">Forgot Password ?</a>
        </div>
        <input type="submit" name="submit" value="Login" />
      </form>
    </div>
  </body>

<!-- JS -->
<script src="../node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

<?php 

if ( isset($_POST["submit"]) ) {
    session_start();
    
   $username = "Admin";
   $password = "RaffiDev160209";

   if ( $_POST["username"] == $username && $_POST["password"] == $password ) {
    $_SESSION["card"] = true;
    header("Location: index"); 
   } else {
    echo "<script>
            Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Password / Username kamu salah nih',
            })
        </script>";
   }
}

?>

</html>