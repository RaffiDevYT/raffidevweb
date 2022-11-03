<?php 
function tambah($data) {     
    global $conn;

  $nama = htmlspecialchars($data["nama"]);
  $telepon = htmlspecialchars($data["telepon"]);
  $email = htmlspecialchars($data["email"]);

    // upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }

      $query = "INSERT INTO raffidevweb
      VALUES
      ('', '$nama', '$telepon', '$email', '$gambar')
  ";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}



function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM raffidevweb WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function upload() {
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yg diupload
    if ( $error === 4 ) {
        echo "<script>
                alert('Choose the picture first');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
            </script>";
    return false;

    }

    // cek jika ukurannya terlalu besar
   if ( $ukuranFile > 1000000 ) {
       echo "<script>
                alert('Image size is too big');
            </script>";
    return false;
   }

   // lolos pengecekan, gambar siap diupload
   // generate nama baru
   $namaFileBaru = uniqid();
   $namaFileBaru .= '.';
   $namaFileBaru .= $ekstensiGambar;

   move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

   return $namaFileBaru;

}


function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $telepon = htmlspecialchars($data["telepon"]);
    $email = htmlspecialchars($data["email"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
         $gambar = upload();
    }
   
  
        $query = "UPDATE raffidevweb SET
                    nama = '$nama',
                   telepon = '$telepon',
                   email = '$email ',
                   gambar = '$gambar'
                   WHERE id = $id
                ";

    mysqli_query($conn, $query);
  
    return mysqli_affected_rows($conn);
}



function cari($keyword) {
    $query = "SELECT * FROM raffidevweb
                WHERE 
            nama LIKE '%$keyword%' OR
            telepon LIKE '%$keyword%' OR
            email LIKE '%$keyword%'
        ";
    return query($query);
}

?>