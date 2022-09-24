<?php 

require "../function/koneksi.php";

$id = $_GET["id"];

if( hapus($id) > 0 ) {
    echo "
    <script>
       alert('Post deleted successfully');
       document.location.href = 'index.php'
    </script>   
    ";
}else {
    echo "
    <script>
       alert('Post failed to delete');
       document.location.href = 'index.php'
    </script>   
    ";
}

function hapus($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM blog WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}


?>