<?php 
$servername = "sql213.epizy.com";
$database = "epiz_32502898_XXX";
$username = "epiz_32502898";
$password = "CG0vsYzFzCqUrS";

$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} 
?>