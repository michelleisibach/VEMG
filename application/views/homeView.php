<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>hautbois Ltd.</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body style="background-color: #1C1C1C">
    <br>
    <br>
    <div class="container.fluid">
        <div class="row">
            <div class="col-2"> </div>
            <div class="col-8">
                <h1 class="title"> HAUTBOIS Ltd. </h1>
            </div>
            <div class="col-2"><a class="emplogin"> Employee Login </a></div>
        </div>
    </div>

    <?php foreach ($result as $movie) { ?>
        <div class="movieborder">
            <div class="movie">
                <div class="moviecontent col">
                    <br>
                    <div class="row">
                        <div class="col-5">
                            <div class="moviedescription">
                                <div><?php echo $movie->Name; ?> </div>
                                <div> <?php echo $movie->Description; ?> </div>
                                <div> <?php echo $movie->Year; ?></div>
                                <div> <?php echo $movie->Genre; ?> </div>
                                <input type="button" value="Reservieren" class="movieboxreserve">
                            </div>
                        </div>

                        <div class="col-5">
                            <div class="moviepicture">
                                <div> <img class="moviepic" src="<?php echo base_url() ?>assets/pics/<?php echo $movie->Url; ?>"> </div>
                            </div>
                        </div>


                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        <br>
        <br>
    <?php } ?>
</body>

</html>