<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <br/><br/>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Category</th>
            <th>Product Price</th>
            <th>Product description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
            if(isset($prods)){
                foreach ($prods as $row){
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row->p_id ?></th>
                        <td><img height="250px" width="250px" src="<?php echo base_url() ?>uploads/<?php echo $row->file_name ?>"></td>
                        <td><?php echo $row->product_name ?></td>
                        <td><?php echo $row->product_category ?></td>
                        <td><?php echo $row->product_price ?></td>
                        <td><?php echo $row->product_des ?></td>
                        <td><a href="<?php echo base_url() ?>index.php/Admin/editPro?id=<?php echo $row->p_id ?>"><span style="color: green;" class="fa fa-pencil"></span></a></td>
                        <td><a href="<?php echo base_url() ?>index.php/Admin/delPro?id=<?php echo $row->p_id ?>"><span style="color: red;" class="fa fa-trash"></span></a></td>
                    </tr>
                    <?php
                }
            }
        ?>

        </tbody>
    </table>

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