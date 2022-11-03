<?php
include "config.php";

if(@$_SESSION['STATUS_LOGIN'] == "OKE"){
    session_destroy();
}

header("location:login.php");