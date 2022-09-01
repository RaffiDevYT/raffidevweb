<?php 
// session_start();

// if ( !isset($_SESSION["login"]) ) {
//     header("Location: login.php");
//     exit;
// }

require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
    echo "
    <script>
       alert('Success Delete Data');
       document.location.href = 'index.php'
    </script>   
    ";
}else {
    echo "
    <script>
       alert('Failed To Delete Data');
       document.location.href = 'index.php'
    </script>   
    ";
}

?>