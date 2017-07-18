<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 6/29/17
 * Time: 3:15 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        .upload{
            width: 157px;
            height: 57px;
            background: url(https://lh6.googleusercontent.com/-dqTIJRTqEAQ/UJaofTQm3hI/AAAAAAAABHo/w7ruR1SOIsA/s157/upload.png);
            overflow: hidden;
        }
        div.upload input {
            display: block !important;
            width: 157px !important;
            height: 57px !important;
            opacity: 0 !important;
            overflow: hidden !important;
        }
    </style>

    <title>eElectronics - HTML eCommerce Template</title>

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
    include "include/head_admin.php";
?>
<br/>
<div class="container">
    <div class="well">

        <?php echo form_open_multipart('Admin/do_upload');

            if(isset($error)){
                echo '<div align="center" class="mainmenu-area"><b>'.$error. '</b></div>';
            }

            if(isset($suc_mess)){
                echo '<div align="center" class="mainmenu-area"><b>'.$suc_mess. '</b></div>';
        }

        ?>

        <div class="form-group">
            <label for="">Product Name:</label>
            <input type="text" name="pro_name" class="form-control" id="email">
        </div>

        <div class="form-group">
            <label for="">Product category:</label>
            <input type="text" name="pro_cat" class="form-control" id="pwd">
        </div>

        <div class="form-group">
            <label for="">Product Price:</label>
            <input type="text" name="pro_price" class="form-control" id="pwd">
        </div>

        <div class="form-group">
            <label for="">Product Description:</label>
            <textarea class="form-control" name="product_des" id="exampleTextarea" rows="5"></textarea>
        </div>

        <div class="upload">
        <input type="file" name="userfile" size="20" />
        </div>

        <br /><br />

        <input  type="submit" value="upload" />

    </div>
</div>
<?php
    form_close();
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

