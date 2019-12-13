<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VEMG - Fleet</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sulphur+Point&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navigationbar navbar-expand-sm navbar-fixed">
        <!-- Links -->
        <ul class="navbar-nav  navbar-left">
            <li>
                <img src="<?php echo base_url(); ?>assets/pics/logo.png">
            </li>
            <ul class="navbar-nav navbar-fixed navbarmiddle">
                <li class="nav-item navitem">
                    <a class="nav-link" href="<?php echo base_url(); ?>/index.php/HomeController">Home</a>
                </li>
                <li class="nav-item navitem">
                    <a class="nav-link" href="<?php echo base_url(); ?>/index.php/CalendarController">Calendar</a>
                </li>
                <li class="nav-item navitem">
                    <a class="nav-link" href="<?php echo base_url(); ?>/index.php/InternalfleetController">Fleet</a>
                </li>
                <li class="nav-item navitem">
                    <a class="nav-link" href="<?php echo base_url(); ?>/index.php/FlyController">Fly</a>
                </li>
                <ul class="navbar-nav  navbar-right navbarrightinternal">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>/index.php/LoginController">Logout</a>
                    </li>
                    <li>
                        <p class="nav-link"><?php echo gmdate("d.n.Y\ H:i"); ?></p>
                    </li>
                </ul>
            </ul>
    </nav>
    <div class="container.fluid">
        <div class="row">
            <div class="col-2"> </div>
            <div class="col-8">
                <br>
                <br>
                <h2> Fleet </h2>
                <br>
                <hr />
                <?php foreach ($result as $aircraft) { ?>
                    <div class="aircraftdisplay">
                        <div class="row">
                            <div class="col-5 aircraftfact">
                                <div>Aircraft: <?php echo $aircraft->aircraftname; ?></div>
                                <div>Registration: <?php echo $aircraft->registration; ?> </div>
                                <div>Max PAX: <?php echo $aircraft->pax; ?> </div>
                                <div>Max Alt: <?php echo $aircraft->alt; ?> ft</div>
                                <div>Actual Fuel: <?php echo $aircraft->fuel; ?> lbs </div>
                                <div>Parking: <?php echo $aircraft->parking; ?> </div>
                                <div>Airport: <?php echo $aircraft->airporticao; ?> </div>
                            </div>
                            <div class="col-5 aircraftpic">
                                <div><img src="<?php echo base_url(); ?>assets/pics/<?php echo $aircraft->img ?>" style="width: 100%;"> </div>
                            </div>
                        </div>
                    </div>
                    <br>
                <?php } ?>


                <div class="col-2"></div>
            </div>
        </div>
</body>

</html>