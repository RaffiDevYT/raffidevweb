<?php
require "../function/koneksi.php";

$id = $_GET["id"];
$query = mysqli_query($koneksi, "SELECT * FROM blog WHERE id='$id'");
$result = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../../assets/img/isci transparant.png" type="image/x-icon">

</head>

<body>

    <br>
    <br><br><br><br><br>
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <form action="" method="POST">
                        <input type="text" name="nama" placeholder="Title" class="form-control" value="<?= $result["nama"] ?>">
                        <br>
                        <br>
                        <input type="text" name="deskripsi" placeholder="Deskripsi" class="form-control" value="<?= $result["deskripsi"] ?>">
                        <br>
                        <br>
                        <textarea name="pesan" cols="30" rows="10" placeholder="Message" class="form-control"><?= $result["pesan"] ?></textarea>
                        <br>
                        <br>
                        <input type="text" name="waktu" placeholder="Contoh: <?= date("d M Y") ?>" class="form-control" required value="<?= $result["waktu"] ?>">
                        <br>
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                        <br>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php

    if (isset($_POST["submit"])) {
        function ubah($data)
        {
            global $koneksi;

            $id = $_GET["id"];
            $nama = htmlspecialchars($data["nama"]);
            $deskripsi = htmlspecialchars($data["deskripsi"]);
            $pesan = $data["pesan"];
            $waktu = htmlspecialchars($data["waktu"]);

            $query = "UPDATE blog SET
                            nama = '$nama',
                           deskripsi = '$deskripsi',
                           pesan = '$pesan',
                           waktu = '$waktu'
                        WHERE id = '$id'
                         ";
            mysqli_query($koneksi, $query);

            return mysqli_affected_rows($koneksi);
        }
        if (ubah($_POST) > 0) {
            echo "
            <script>
               alert('Post modified successfully');
               document.location.href = 'index.php'
            </script>   
            ";
        } else {
            echo "
           <script>
              alert('Post failed to change');
              document.location.href = 'index.php'
           </script>   
           ";
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>