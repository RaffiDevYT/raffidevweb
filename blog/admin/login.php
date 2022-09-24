<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="shortcut icon" href="assets/img/isci777.png" type="image/x-icon">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/@sweetalert2/theme-borderless/borderless.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Login Admin</h1>
                    <div class="line"></div>
                    <br><br>
                    <form action="" method="POST">
                        <input type="username" name="username" id="username" class="form-control" autocomplete="off" placeholder="Username">
                        <br>
                        <input type="password" name="password" id="password" class="form-control" autocomplete="off" placeholder="Password">
                        <br><br>
                        <button type="submit" name="submit" class="submit">Submit</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- JS -->
<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

<?php

if (isset($_POST["submit"])) {
    session_start();

    $username = "Admin";
    $password = "RaffiDev160209";

    if ($_POST["username"] == $username && $_POST["password"] == $password) {
        $_SESSION["admin"] = true;
        header("Location: index.php");
        exit;
        //     echo "<script>
        //     Swal.fire({ title: `Mantap!`,
        //                 text: `Username dan Password kamu benar!`, 
        //                 icon: `success`,
        //                 footer: `<a href='level-2' style='color: #0c1220; background-color: aqua;' class='btn btn-primary'>Continue</a>`,
        //                  });

        // </script>";
    } else {
        echo "<script>
           alert('Username / Password kamu salah nih')
        </script>";
    }
}

?>

</html>