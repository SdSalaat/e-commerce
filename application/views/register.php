<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 6/23/17
 * Time: 1:00 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile River</title>
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo.png" />

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
include "include/head.php";
?>
<style>

    .colorgraph {
        height: 5px;
        border-top: 0;
        background: #c4e17f;
        border-radius: 5px;
        background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
    }
</style>
<br/>
<!--Register and Login Forms-->

<div style="width:100%;" class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <?php
        echo form_open('Register','role="form"');
        ?>

        <h2>Please Sign Up <small>It's free and always will be.</small></h2>
        <hr class="colorgraph">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <b><?php echo form_error('fname'); ?></b>
                    <input type="text" name="fname" id="first_name" value="<?php echo set_value('fname'); ?>"  class="form-control input-lg" placeholder="First Name" tabindex="1">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <b><?php echo form_error('lname'); ?></b>
                    <input type="text" name="lname" id="last_name" class="form-control input-lg" value="<?php echo set_value('lname'); ?>"  placeholder="Last Name" tabindex="2">
                </div>
            </div>
        </div>
        <div class="form-group">
            <b><?php echo form_error('username'); ?></b>
            <input  value="<?php echo set_value('username'); ?>" type="text" name="username" id="display_name" class="form-control input-lg" placeholder="User Name" tabindex="3">
        </div>
        <div class="form-group">
            <b><?php echo form_error('email'); ?></b>
            <input type="email" name="email" id="email"  value="<?php echo set_value('email'); ?>" class="form-control input-lg" placeholder="Email Address" tabindex="4">
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <b><?php echo form_error('password'); ?></b>
                    <input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>"  class="form-control input-lg" placeholder="Password" tabindex="5">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <div><b><?php echo form_error('password_conf'); ?></b></div>
                    <input type="password" name="password_conf" id="password_confirmation" value="<?php echo set_value('password_conf'); ?>"  class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                </div>
            </div>
        </div>
        <hr class="colorgraph">
        <div class="row">
            <div class="col-md-12"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
            <!--<div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Sign In</a></div>-->
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>

<!--end Form-->
<br/><br/>
<?php
include "include/footer.php";
?>
<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>
</body>
</html>


