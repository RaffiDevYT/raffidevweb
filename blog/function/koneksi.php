<?php

$koneksi = mysqli_connect("localhost", "root", "", "test");

$query = mysqli_query($koneksi, "SELECT * FROM blog");
