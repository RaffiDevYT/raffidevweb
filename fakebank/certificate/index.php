<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ISCI Team | Get Certificate</title>

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../../img/raffidevbulet.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <title>Certificate Generator</title>
</head>

<body>
    <center>
        <br><br><br>
        <h3>Get your Certificate</h3>
        <div class="line"></div>
        <br><br>
        <form method="POST" action="">
            <div class="form-group col-sm-6">
                <input type="text" name="nama" class="form-control" id="name" placeholder="Enter Name Here..."
                    autocomplete="off">
            </div>
            <br>
            <button type="submit" name="generate" class="submit" id="submit" onclick="disabled()" )>Generate</button>
        </form>
        <br>
        <?php 
        

      if (isset($_POST['generate'])) {
        $nama = strtoupper( $_POST['nama'] );
        $nama_len = strlen( $_POST['nama'] );

          if( $nama_len <= 6 ) {
            $font_size = 40;
          }
          elseif( $nama_len <= 12 ) {
            $font_size = 18;
          }
          elseif( $nama_len <= 15 ) {
            $font_size = 26;
          }
          elseif( $nama_len<= 20 ) {
             $font_size = 18;
          }
          elseif( $nama_len <= 22) {
            $font_size = 15;
          }
          elseif( $nama_len <= 33 ) {
            $font_size = 11;
          }
          else {
            $font_size = 10;
          }

        if ( $nama == "" ) {
          echo 
          "
          <div class='alert alert-danger col-sm-6' role='alert'>
              don't empty
          </div>
          ";
        } else {
          echo 
          "
          <div class='alert alert-success col-sm-6' role='alert'>
              Yay! congratulations $nama, you have got a certificate and deserve to join our special group 
              <a href='' class='btn btn-success'>Join our Discord Group</a>
          </div>
          ";

          //masukin gambar ke variable
          $image = "isci-certificate.png";

          $createimage = imagecreatefrompng( $image );

          //outut file sertifikatnya
          $output = "users-certificate/$nama.png";

          //untuk buat warna pake rgb
          $white = imagecolorallocate($createimage, 205, 245, 255);
          $aqua = imagecolorallocate($createimage, 0, 255, 255);

          //buat rotasi :v
          $rotation = 0;

          //ngatur sumbu y ama x
          $origin_x = 40;
          $origin_y = 150;

          

          // untuk ngebuat proses untuk karakter nama nya, pokoknya gitulah :v
          $certificate_text = $nama;


          // nama file teks nya 
          $drFont = dirname(__FILE__) ."/font/square.ttf";

    
          // untuk nampilin teks ke serti nya
          imagettftext($createimage, $font_size, $rotation, $origin_x, $origin_y, $aqua, $drFont, $certificate_text);


          imagepng($createimage,$output,3);

          ?>
        <br>
        <br>
        <img src="<?php echo $output; ?>" class="output">
        <br>
        <br>

        <br>
        <br>
        <a href="<?php echo $output; ?>" class="submit">Download Your Certificate</a>
        <br><br>
        <br>
        <br>
        <br>
        <?php 
        }
    }
      

     ?>

    </center>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>