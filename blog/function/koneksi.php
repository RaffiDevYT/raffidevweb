<?php

$koneksi = mysqli_connect("sql213.epizy.com", "epiz_32502898", "CG0vsYzFzCqUrS", "epiz_32502898_raffidevweb");

$query = mysqli_query($koneksi, "SELECT * FROM blog");
