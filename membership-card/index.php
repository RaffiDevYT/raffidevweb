<?php 


session_start();
if (!isset($_SESSION["card"])) {
    header("Location: login");
    exit;
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ISCI Team | ISCI Agent Card</title>

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../../assets/img/isci777.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <title>Membership Card Generator</title>
</head>

<body>
    <center>
        <br><br><br>
        <h3>Get your Membership Card</h3>
        <div class="line"></div>
        <br><br>
        <form method="POST" action="">
            <div class="form-group col-sm-6">
                <input type="text" name="codename" class="form-control" id="name" placeholder="Enter Codename Here..." autocomplete="off">
                <br>
                <input type="text" name="realname" class="form-control" id="name" placeholder="Enter Realname Here..." autocomplete="off">
                <br>
                <input type="text" name="pdb" class="form-control" id="name" placeholder="Enter Place, Date of Birth Here..." autocomplete="off">
                <br>
                <input type="text" name="religion" class="form-control" id="name" placeholder="Enter religion Here..." autocomplete="off">
            </div>
            <br>
            <button type="submit" name="generate" class="submit" id="submit">Generate</button>
        </form>
        <br>
        <?php 
        

      if (isset($_POST['generate'])) {
        $codename = strtoupper( $_POST['codename'] );
        $realname = strtoupper($_POST['realname']);
        $pdb = strtoupper($_POST['pdb']);
        $religion = strtoupper($_POST['religion']);

            if ( $codename ) {
                $font_size_codename = 20;
            }
            if ( $realname ) {
                $font_size_realname = 20;
            }
            if ( $pdb ) {
                $font_size_pdb = 20;
            }
            if ( $religion ) {
                $font_size_religion = 20;
            }

            if ( $codename == "" || $realname == "" || $pdb == "" || $religion == "" ) {
                echo "<div class='alert alert-danger col-sm-6' role='alert'>
                            Ensure you fill all the fields!
                        </div>";
            } else {
                echo "<div class='alert alert-success col-sm-6' role='alert'>
                Congratulations $codename!, your membership card has been made, and you are officially an ISCI agent.
                        </div>";
            }


          
        //   $img = "img/card.png";

          $createimage = imagecreatefrompng("img/card.png");

          
          $output = "img/$codename.png";

          
          $white = imagecolorallocate($createimage, 205, 245, 255);
          $aqua = imagecolorallocate($createimage, 0, 255, 255);

        
          $rotation = 0;

         
          $origin_x_codename = 450;
          $origin_y_codename = 354;

          $origin_x_realname = 450;
          $origin_y_realname = 390;

         $origin_x_pdb = 450;
         $origin_y_pdb = 425;

         $origin_x_religion = 450;
         $origin_y_religion = 460;

          
          $drFont = dirname(__FILE__) ."/font/square.ttf";

    
          
          imagettftext($createimage, $font_size_codename, $rotation, $origin_x_codename, $origin_y_codename, $aqua, $drFont, $codename);

          imagettftext($createimage, $font_size_realname, $rotation, $origin_x_realname, $origin_y_realname, $aqua, $drFont, $realname);

          imagettftext($createimage, $font_size_pdb, $rotation, $origin_x_pdb, $origin_y_pdb, $aqua, $drFont, $pdb);

          imagettftext($createimage, $font_size_religion, $rotation, $origin_x_religion, $origin_y_religion, $aqua, $drFont, $religion);


          imagepng($createimage, $output, 3);

          ?>
        <br>
        <br>
        <img src="<?php echo $output; ?>" class="output">
        <br>
        <br>

        <br>
        <br>
        <a href="<?php echo $output; ?>" class="submit">Download Your Membership</a>
        <br><br>
        <br>
        <br>
        <br>
        <?php 
        }
    
      

     ?>

    </center>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>