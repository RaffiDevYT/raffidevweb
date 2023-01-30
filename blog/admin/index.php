<?php

session_start();

if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}

require "../function/koneksi.php";

// $waktu = date("d Y M");
// echo $waktu;

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

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="shortcut icon" href="../../img/raffidevbulet.png" type="image/x-icon">

</head>

<body>


  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand bg-blue-400" href="./../../index.html">Blog </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link btn btn-outline-dark" href="../../">Back to home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <br>
  <br><br><br><br><br>
  <center>

    <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Add Post <i class="bi bi-plus-lg"></i>
    </button>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form">
              <div class="container">


                <form action="" method="POST">
                  <input type="text" name="nama" placeholder="Title" class="form-control" required>
                  <br>
                  <br>
                  <input type="text" name="deskripsi" placeholder="Deskripsi" class="form-control" required>
                  <br>
                  <br>
                  <textarea name="pesan" cols="30" rows="5" placeholder="Message" class="form-control" required></textarea>
                  <br>
                  <br>
                  <input type="text" name="waktu" placeholder="Contoh: <?= date("d M Y") ?>" class="form-control" required value="<?= date("d M Y") ?>">
                  <br>
                  <br>
                  <button type="submit" name="submit" class="btn btn-outline-dark">Submit <i class="bi bi-send"></i></button>
                  <br>
                  <br>
                </form>

              </div>

            </div>



            <?php

            if (isset($_POST["submit"])) {

              // Variable
              $nama = htmlspecialchars($_POST["nama"]);
              $deskripsi = htmlspecialchars($_POST["deskripsi"]);
              $pesan = $_POST["pesan"];
              $waktu = htmlspecialchars($_POST["waktu"]);


              $query = mysqli_query($koneksi, "INSERT INTO blog VALUES ('', '$nama', '$pesan', '$deskripsi', '$waktu') ");

              if ($query) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> postingan baru berhasil di tambah
            <a href="index.php" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
          </div>';
              }
            }
            ?>
          </div>

        </div>
      </div>
    </div>

  </center>



  <hr>

  <div class="row d-flex justify-content-center">

    <?php
    $tampil = mysqli_query($koneksi, "SELECT * FROM blog");
    while ($data = mysqli_fetch_array($tampil)) {
    ?>
      <div class="card" style="width: 30rem;">
        <div class="card-body">
          <h5 class="card-title"><?= $data["nama"] ?></h5>
          <p class="card-text"><?= $data["deskripsi"] ?></p>
          <p class="text-muted"><?= $data["waktu"] ?></p>
          <a href="view.php?id=<?= $data["id"] ?>" class="btn btn-primary">View More <i class="bi bi-eye"></i></a>
          <a href="edit.php?id=<?= $data["id"] ?>" class="btn btn-warning">Edit <i class="bi bi-pencil-square"></i></a>
          <a href="delete.php?id=<?= $data["id"] ?>" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus postingan ini?');">Delete <i class="bi bi-trash3"></i></a>
        </div>
      </div>
    <?php } ?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>