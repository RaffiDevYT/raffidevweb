<?php
include "admin123/admin/config.php";

if(@$_SESSION['STATUS_LOGIN'] == "OKE"){
    session_destroy();
}

header("location:login.php");