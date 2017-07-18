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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shopping Cart</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="#">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                if(isset($message)){
                                    echo $message;
                                }

                                $pro_total = 0;

                                if(isset($v_cart)){
                                    foreach($v_cart as $row){
                                        $pro_total = $row->quantity * $row->product_price;
                                        $row->proTotal = $pro_total;
                                        ?>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="btn remove" href="<?php echo base_url() ?>index.php/Cart/delItem?id=<?php echo $row->p_id ?>">×</a>
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href=""><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="<?php echo base_url() ?>uploads/<?php echo $row->file_name ?>" ></a>
                                            </td>

                                            <td class="product-name">
                                                <a href=""><?php echo $row->product_name ?></a>
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">Rs.<?php echo $row->product_price ?></span>
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">

                                                    <!--<input type="number" size="4" class="input-text qty text" title="Qty" value="<?php echo $row->quantity ?>" min="0" step="1">-->
                                                    <a href='<?php echo base_url() ?>index.php/Cart/editQty?todo=-&p_id=<?php echo $row->p_id ?>' class='btn'>-</a>
                                                    <span ><?php echo $row->quantity ?></span>
                                                    <a  href='<?php echo base_url() ?>index.php/Cart/editQty?todo=--&p_id=<?php echo $row->p_id ?>' class='btn' >+</a>
                                                </div>

                                            <td class="product-subtotal">
                                                <span id="total" class="amount">Rs.<?php echo $pro_total ?></span>
                                            </td>
                                        </tr>


                                        <?php
                                    }
                                }
                                ?>
                                <?php
                                if(isset($v_cart)){
                                    $pro_totals = 0;
                                    foreach($v_cart as $row){
                                        $pro_totals += $row->proTotal;
                                    }
                                }

                                ?>
                                <tr>
                                    <td class="actions" colspan="5">
                                        <a href='<?php echo base_url() ?>index.php/Checkout?tot=<?php echo $pro_totals?>' class="btn btn-lg add_to_cart_button ">
                                            Proceed To Checkout
                                        </a>
                                    </td>
                                    <td><?php if(isset($pro_totals)){ echo 'Rs.'.$pro_totals.'/-';} ?></td>

                                </tr>
                                </tbody>
                            </table>
                        </form>

                        <div class="cart-collaterals">
                        </div>
                    </div>
                </div>
            </div>
        </div>
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