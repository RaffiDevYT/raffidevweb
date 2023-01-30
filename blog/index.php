<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "function/koneksi.php";


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="shortcut icon" href="../img/raffidevbulet.png" type="image/x-icon">
</head>

<body>


  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <a class="navbar-brand bg-blue-400" href="./../../index.html">Blog </a>
          <br>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-dark" href="../">Back to home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="row d-flex justify-content-center card-section">

    <?php
    $tampil = mysqli_query($koneksi, "SELECT * FROM blog");
    while ($data = mysqli_fetch_array($tampil)) {
    ?>
      <div class="card" style="width: 30rem;">
        <div class="card-body">
          <h5 class="card-title"><?= $data["nama"] ?></h5>
          <p class="card-text"><?= $data["pesan"] ?></p>
          <p class="text-muted"><?= $data["waktu"] ?></p>
          <a href="view.php?id=<?= $data["id"] ?>" class="btn btn-primary">View More <i class="bi bi-eye"></i></a>
        </div>
      </div>
    <?php } ?>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>