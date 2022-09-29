<?php 
// session_start();
// if (!isset($_SESSION["level-12.php"])) {
//     header("Location: level-12.php");
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 13</title>
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
                    <h1>Level 13</h1>
                    <div class="line"></div>
                    <br><br>
                    <p class="text-teal-100">Hello guys.... this time there is a website that we have to test. We must
                        look for the website login page and bypass the admin login. this website is fakebank website
                        which you have to hack! good spirit :v</p>
                    <br>
                    <p class="text-xl penjelasan text-teal-600">Website: <a href="fakebank/"><span
                                class="text-teal-100">Click this link</span></a></p>
                    <br><br>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="admin-email" placeholder="Admin Email">
                            <br>
                            <p class="text-l penjelasan text-teal-600">Instruction: <span class="text-teal-100">Isi kan
                                    email admin yang tertera di website fakebank tersebut</span></p>
                        </div>
                        <br>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="admin-folder" placeholder="Admin Folder Name">
                            <br>
                            <p class="text-l penjelasan text-teal-600">Instruction: <span class="text-teal-100">Isi kan
                                    nama folder admin yang telah kalian temukan</span></p>
                            <br><br>
                            <button type="submit" name="submit" class="submit">Submit</button>
                        </div>
                    </form>
                    <br>
                    <p class="text-xl penjelasan text-teal-600">Technique: <span class="text-teal-100">SQL Injection, Find
                            Admin Login</span></p>
                    <p class="text-xl penjelasan text-teal-600">Instruction: <span class="text-teal-100">Your first
                            you have to look for the login page from the fakebank website, and you have to bypass the admin login
                            with SQL Injection technique</span></p>
                </div>
                <div class="col-md-6">
                    <p class="text-xl penjelasan text-teal-600">Note : <span class="text-teal-100">When you're in
                            fakebank admin page, you have to transfer money, input Send From fill with 87654,
                            Enter the Send To input with 12345, and the Amount of money input with 20,000,000</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- JS -->
<script src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

<?php 

if ( isset($_POST["submit"]) ) {
    
   $adminEmail = "johndoe432@gmail.com";
   $adminFolder = "admin";

   if ( $_POST["admin-email"] == $adminEmail && $_POST["admin-folder"] == $adminFolder ) {
    echo "<script>
              Swal.fire({ title: `Good`,
                          text: `good luck!`, 
                          icon: `success`,
                           });
          
          </script>";
   } else {
    echo "<script>
            Swal.fire({
            icon: 'error',
            title: 'Yaahh...',
            text: 'Your skills are not that good... :)',
            })
        </script>";
   }
}

?>

</html>