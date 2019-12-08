<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VEMG - Login</title>
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
                    <a class="nav-link" href="<?php echo base_url(); ?>/index.php/FleetController">Fleet</a>
                </li>
                <li class="nav-item navitem">
                    <a class="nav-link" href="<?php echo base_url(); ?>/index.php/AboutusController">About</a>
                </li>
                <li class="nav-item navitem">
                    <a class="nav-link" href="<?php echo base_url(); ?>/index.php/ContactController">Contact</a>
                </li>
                <li class="nav-item navitem">
                    <a class="nav-link" href="<?php echo base_url(); ?>/index.php/ReserveseatController">Tickets</a>
                </li>
                <ul class="navbar-nav  navbar-right navbarright">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>/index.php/LoginController">Login</a>
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
                <br>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">      
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>

</html>