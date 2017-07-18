<?php
/**
 * Created by PhpStorm.
 * User: asamad
 * Date: 7/10/17
 * Time: 11:29 AM
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

    <style type="text/css" media="print">
        @page {
            size: auto;
            margin: 0 auto 0 auto;
        }
    </style>
    <!-- Google Fonts -->
    <link  href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
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
//include "include/head.php";
?>

<br/><br/>

<div class="container well">
    <div id="print">
        <div class="">
            <span style="float: left;">
                <b>Mobile River</b><br/>
                <i>shop #111 <br/>1<sup>st</sup> Floor Star City Mall Saddar karachi.</i>
            </span>
            <span style="float: right;">
                <b>Contact no:</b><br/>

                <span>
                    <b> Moiz </b> 03162658853
                <br/>
                    <b> Sami </b> 03162658853
                </span>

            </span>
            <br/><br/><br/>
            <div>
                <div>
                    <center>
                        <h1><span style="color: gray;">Mobile</span> <span style="color:#1abc9c;">River</span></h1>
                        <br/>
                        <span> <b>Customer Name :</b> <?php echo $_SESSION['dis_name'] ?> </span>
                    </center>
                    <span style="float: right;"><h4>Bill #<?php echo $_GET['oh']?></h4></span>

                </div>
                <br/>
                <div class="table ">
                    <table align="center" class="table table-hover table-responsive col-md-12">
                        <thead>
                        <tr>
                            <th>qty</th>
                            <th colspan="3">product name</th>
                            <th>product price</th>
                            <th>total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($order)){
                            foreach ($order as $row){
                                ?>
                                <tr>
                                    <td><?php echo $row->p_qty ?></td>
                                    <td colspan="3" ><?php echo $row->p_name ?></td>
                                    <td><?php echo $row->p_price ?></td>
                                    <td><?php echo $row->p_qty * $row->p_price ?></td>
                                </tr>
                                <?php
                            }
                        }
                        if(isset($order)){
                            $pro_totals = 0;
                            foreach($order as $row){
                                $pro_totals += $row->p_qty * $row->p_price;
                            }

                            $pro_totals += 1000;

                        }
                        ?>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2"><b>Delivery Charges :</b></td>
                            <td><b>1000/-</b></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td colspan="2"><b>Net Bill:</b></td>
                            <td><?php echo $pro_totals ?></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
                <button onclick="printDiv('print')" id="printpagebutton1" class="btn btn-link"><span><i class="fa fa-print"></i> Print</span></button>

                <center><a href="<?php echo base_url() ?>index.php/Welcome"><button class="btn btn-primary" id="printpagebutton" >Back to Home</button></a></center>



</div>

<script>
    function myFunc(){
        var printButton = document.getElementById("printpagebutton");
        var printButton1 = document.getElementById("printpagebutton1");
        //Set the print button visibility to 'hidden'
        printButton.style.visibility = 'hidden';
        printButton1.style.visibility = 'hidden';

        window.print();

        printButton.style.visibility = 'visible';
        printButton1.style.visibility = 'visible';
    }
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>

<?php
//include "include/footer.php";
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
