<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 7/10/17
 * Time: 3:42 PM
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
include "include/head_admin.php";
?>

<br/><br/><br/>
<div class=" container">
    <table class="table table-hover table-bordered table-responsive">
        <thead>
        <tr>
            <th>#</th>
            <th>Delivery Person name</th>
            <th>Delivery Address</th>
            <th>Delivery Net Total</th>
            <th>Delivery City</th>
            <th>Delivery email</th>
            <th>Delivery Person phone</th>
            <th>Order Day</th>
            <th>status</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(isset($order1)){
            foreach ($order1 as $row){
                ?>
                <tr>
                    <th scope="row"><?php echo $row->po_id ?></th>
                    <td><?php echo $row->bill_fname . '' . $row->bill_lname ?></td>
                    <td><?php echo $row->bill_add ?></td>
                    <td><?php echo $row->cart_total ?></td>
                    <td><?php echo $row->bill_city ?></td>
                    <td><?php echo $row->bill_email ?></td>
                    <td><?php echo $row->bill_phone ?></td>
                    <td><?php echo $row->date ?></td>

                    <td><a href="<?php echo base_url() ?>index.php/Admin/changeStatus?po_id=<?php echo $row->po_id ?>">
                            <?php
                            if($row->status == 'delivered') {
                                ?>
                                <i style="color:green; font-size: 30px" class="fa fa-truck"></i>
                                <?php
                            }
                            else{
                                ?>
                                <i style="color:red; font-size: 30px" class="fa fa-truck"></i>
                                <?php
                            }
                            ?>
                        </a></td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
</div>
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
