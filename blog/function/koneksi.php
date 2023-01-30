<?php

$koneksi = mysqli_connect("localhost", "root", "", "raffidev_raffidev.com");

$query = mysqli_query($koneksi, "SELECT * FROM blog");
