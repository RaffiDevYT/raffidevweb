<?php 
// session_start();

// if ( !isset($_SESSION["login"]) ) {
//     header("Location: login.php");
//     exit;
// }

require 'config.php';
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data siswa berdasarkan id
$mhs = query("SELECT * FROM raffidevweb WHERE id = $id")["0"];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {



 // cek apakah data berhasil di ubah atau belum
 if( ubah($_POST) > 0 ) {
     echo "
     <script>
        alert('Successfully Changed Data');
        document.location.href = 'index.php'
     </script>   
     ";
 } else {
    echo "
    <script>
       alert('Failed To Change Data');
       document.location.href = 'index.php'
    </script>   
    ";
 }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Data Agent</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <center>
        <br><br><br><br>
        <h1>Change Data Agent</h1>
        <div class="line"></div>
        <br>

        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
            <ul>
                <li>
                    <label for="nama">Nama: </label>
                    <input type="text" class="input-control" name="nama" id="nama" required
                        value="<?= $mhs["nama"]; ?>">
                </li>
                <br>
                <li>
                    <label for="telepon">Phone Number: </label>
                    <input type="text" class="input-control" name="telepon" id="telepon" required
                        value="<?= $mhs["telepon"]; ?>">
                </li>
                <br>
                <li>
                    <label for="email">Fakename: </label>
                    <input type="text" class="input-control" name="email" id="email" required
                        value="<?= $mhs["email"]; ?>">
                </li>
                <br>
                <li>
                    <label for="gambar">Image: </label><br>
                    <img src="img/<?= $mhs['gambar']; ?>" width="100" height="100" class="rounded-circle"><br>
                    <br>
                    <input class="input-control" type="file" name="gambar" id="gambar">
                </li>
                <br>
                <li>
                    <button type="submit" class="btn btn-primary" name="submit">Ubah Data!</button>
                </li>
            </ul>

        </form>

    </center>
</body>

</html>