<?php

require "function/koneksi.php";
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
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>ISCI Team | <?= $result["nama"] ?></title>
    <link rel="shortcut icon" href="../assets/img/isci transparant.png" type="image/x-icon">
</head>

<body>





    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><?= $result["nama"] ?></h1>
                    <div class="line"></div>
                    <br>
                    <p class="text-primary"><?= $result["deskripsi"] ?></p>
                    <br>
                    <p class="text-muted"><?= $result["waktu"] ?></p>
                </div>
            </div>
        </div>
    </div>



    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <p><?= $result["pesan"] ?></p>
                </div>
            </div>
        </div>
    </div>




</body>

</html>