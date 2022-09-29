<?php
session_start();
if (!isset($_SESSION["level-10.php"])) {
    header("Location: level-10.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 11</title>
    <link rel="shortcut icon" href="assets/img/isci777.png" type="image/x-icon">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/challenge.css">
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

                    <h1>Level 11</h1>
                    <div class="line"></div>
                    <br><br>

                    <form action="" method="POST">
                        <input type="text" name="username" id="username" class="form-control" autocomplete="off" placeholder="Username">
                        <br>
                        <input type="text" name="password" id="password" class="form-control" autocomplete="off" placeholder="Password">
                        <br><br>
                        <button type="submit" name="submit" class="submit">Submit</button>
                    </form>
                    <br>
                    <p class="text-xl penjelasan text-teal-600">Teknik : <span class="text-teal-100">Steganography</span></p>
                    <p class="text-xl penjelasan text-teal-600">Petunjuk : <a href="steganography.rar" class="text-teal-100">[Klik Disini]</a>
                    </p>
                    <p class="text-xl penjelasan text-teal-600">Tools : <a href="https://stylesuxx.github.io/steganography/" class="text-teal-100">Steganography
                            Online</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- JS -->
<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>


<?php

if (isset($_POST["submit"])) {

    $username = "superAdmin";
    $password = "password123";

    if ($_POST["username"] == $username && $_POST["password"] == $password) {
        $_SESSION["level-11.php"] = true;
        header("Location: level-12.php");
        exit;
        echo "<script>
    Swal.fire({ title: `Good`,
                text: `Your username and password are correct!`, 
                icon: `success`,
                footer: `<a href='level-12' style='color: #0c1220; background-color: aqua;' class='btn btn-primary'>Continue</a>`,
                 });

</script>";
    } else {
        echo "<script>
            Swal.fire({
            icon: `error`,
            title: `Yaahh...`,
            text: `Your skills are not that good... :)`,
            
            })
        </script>";
    }
}

?>


</html>