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

    <div class="product-big-title-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br/><br/>
<?php
    if(isset($prods)){
        foreach ($prods as $row){
    ?>

            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <img style='height:300px; width:300px' src="<?php echo base_url() ?>uploads/<?php echo $row->file_name ?>" alt="">
                    </div>
                    <h2><a href=""><?php echo $row->product_name ?></a></h2>
                    <div class="product-carousel-price">
                        <ins>Rs.<?php echo $row->product_price ?></ins>
                    </div>
                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="<?php echo base_url()?>index.php/Cart?id=<?php echo $row->p_id ?>">Add to cart</a>
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="<?php echo base_url()?>index.php/Welcome/single?id=<?php echo $row->p_id ?>">Description</a>
                    </div>
                </div>
            </div>
                    <?php
        }
    }
?>

<div style="width: 100%" class="row">
    <div class="col-md-12">

    </div>
</div>


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