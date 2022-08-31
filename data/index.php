<?php 

session_start();
if (!isset($_SESSION["data"])) {
    header("Location: login.php");
    exit;
}


require 'admin123/admin/functions.php';
$siswa = query("SELECT * FROM siswa ORDER BY id");

// tombol cari diklik 
if( isset($_POST["cari"]) ) {
    $siswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Agen ISCI</title>
    <link rel="shortcut icon" href="img/isci777.png" type="image/x-icon">

    <link rel="stylesheet" href="style.css">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <br><br>
    <a href="../" class="back">Back</a>

    <br><br><br>
    <center>


        <img src="img/isci777.png" class="header-img" alt="">

        <h1 class="header">Daftar Agen</h1>
        <div class="line"></div>



        <form action="" method="post">

            <input type="text" class="input-control" name="keyword" size="40" autofocus
                placeholder="Cari beberapa data agen..." autocomplete="off"><br><br>


            <button type="submit" class="btn btn-primary" name="cari"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg></button>

        </form>



        <br>


        <table class="table table-dark table-hover" cellpadding="10" cellspacing="0">

            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Telepon</th>
                <th>Nama</th>
                <th>Codename</th>
            </tr>


            <?php $i = 1; ?>
            <?php foreach( $siswa as $row ) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="admin123/admin/img/<?= $row["gambar"]; ?>" width="70" height="70" alt="">

                </td>
                <td> <a href="https://wa.me/<?= $row["telepon"] ?>" class="btn btn-primary">Contact</a> </td>


                <td><?= $row["nama"] ?></td>
                <td><?= $row["email"] ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>

        </table>
        </div>
        <br><br><br>
        <footer>
            <p>Copyright &copy; 2021 - by Raden Sulthan Hadi. All Right Reserved</p>
        </footer>
        <br><br><br><br>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>