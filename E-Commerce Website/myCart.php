<!doctype html>
<html lang="en">
<?php
session_start();
//$_SESSION['mycart'] = array_unique($_SESSION['mycart']);

?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="CSS/myCart.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <title>My cart</title>
</head>

<body>
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="sellProduct.php">
            <img src="imges/ydll5syzcerukfrkg0kr.png" width="40px" class="img-circle elevation-2 mx-3" />
            MYSHOP.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="sellProduct.php">Home <span class="sr-only">(current)</span></a>
                </li>



            </ul>

        </div>

    </nav>
    <!--NavBar-->
    <!--MyCart-->
    <!--Section: Block Content-->
    <main class="page">
        <section class="shopping-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2>Shopping Cart</h2>
                    <p>Complete the shopping</p>
                </div>
                <div class="content">
                    <div class="row" id='datacontent'>



                    </div>
                    <div class="col">
                        <div class='summary'>
                            <div id="summary">
                                <h3>Summary</h3>
                                <div class='summary-item'><span class='text  ml-2'>Subtotal</span><span class='price mr-2'>500 ₹ </span>
                                </div>
                                <div class='summary-item'><span class='text  ml-2'>Discount</span><span class='price mr-2'>0 ₹ </span></div>
                                <div class='summary-item'><span class='text  ml-2'>Shipping</span><span class='price mr-2'>0 ₹ </span></div>
                                <div class='summary-item' style='background:yellow;'><span class='text  ml-2'>Total</span><span class='price mr-2'>360 ₹ </span></div>
                                
                                <div class='summary-item'><span class='text  ml-2'>Enter Your Name</span><span class='price mr-2'>
                                      
                                <input type='text' class='form-control mr-2 mt-1' name='name' id='name' />
                                
                                    </span></div>
                                    
                                    
                            </div>
                            <button type='button' name='rzp-button1' id='rzp-button1' class='btn btn-primary btn-lg btn-block'>Checkout</button>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </main>
    <!--Section: Block Content-->
    <!--MyCart-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <script src="CSS/myCart.js"></script>

    <script>
         
       
        document.getElementById('rzp-button1').onclick = function(e) {
            let name = $('#name').val();
            let subtotal = $('#subtotal').val();
            let bascket = $('#totalQuans').val();
            let address=$('#address').val();

           // alert(bascket);
            if (name !== '' && address!=='') {
                if(subtotal!=0){
                    var options = {
            "key": "rzp_test_jrSoGxWm0N23uV", // Enter the Key ID generated from the Dashboard
            "amount": subtotal*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "MyShop.com",
            "description": "Test Transaction",
            "image": "https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco/ydll5syzcerukfrkg0kr",
            "handler": (response) => {
                let name = $('#name').val();
                let subtotal = $('#subtotal').val();
                let totalQuan=$('#totalQuans').val();
                let address=$('#address').val();
                /// alert(name);


                location.replace('RAZERPAY.php?online_id=' + response.razorpay_payment_id + "&name=" + name+"&subtotal="+subtotal+"&bascket="+totalQuan+"&address="+address);

            }
        };
        var rzp1 = new Razorpay(options);
                rzp1.open();
                e.preventDefault();
            }
                else{
                    alert("add at least 1 product please!!");
                }
            } else {
                alert("Enter Name  and address");
            }
        }
    </script>



</body>
<?php

require('config.php');
$i = 0;
$rowData = array();
foreach ($_SESSION['mycart'] as $mycart) {
    $sql = "select * from product_details where product_id='$mycart'";
    //  echo $sql;
    $result = $conn->query($sql);
    //echo $result;
    $row1 = $result->fetch_array(MYSQLI_NUM);
    array_push($rowData, $row1);
}
$_SESSION['rowData']=$rowData;
//echo $prodID;
$dataContent = "";
$int = 0;
$subtotal = 0;
$quantitiesPhp=0;
$arr_quan=array();
foreach ($rowData as $row) {
    // print_r($row);
    $quans = $_SESSION['mycartQuantity'][$int];
    array_push($arr_quan,$quans);
    $quantitiesPhp=array_sum($_SESSION['mycartQuantity']);
    $subtotal = $subtotal + ($quans * $row[2]);

    $dataContent .= "   <div class='col-md-12 col-lg-8'><div class='items'><div class='product'>";
    $dataContent .= "   <div class='row'><div class='col-md-3'>";
    $dataContent .= "   <img src='$row[7]'  style='width:100px;height:100px; margin-left:20px;margin-top:20px;' class='img-fluid'>";
    $dataContent .= "   </div><div class='col-md-8'><div class='info'>";
    $dataContent .= "   <div class='row'><div class='col-md-5 product-name'><div class='product-name'>";
    $dataContent .= "   <a href='#'>$row[1]</a>";
    $dataContent .= "   <div class='product-info'><div>Price: <span>$row[2] ₹ </span></div>";
    $dataContent .= "   <div>added by: <span class='value'>$row[6]</span></div>";
    $dataContent .= "   <div></div></div><input type='text' name='totalQuans'id='totalQuans' value='$quantitiesPhp'    hidden/>";
    $dataContent .= "   </div></div><div class='col-md-4 quantity'><label for='quantity'>Quantity:</label>";
    $dataContent .= "   <input id='quantity' type='number' value ='$quans' class='form-control quantity-input' disabled>";
    $dataContent .= "   </div>";
    $dataContent .= "   <div class='col-md-3 price'><button class='btn btn-danger'>delete</button></div></div></div></div></div></div></div></div>";
    $int++;
}
$_SESSION['arr_quan']=($arr_quan);
echo "<script>document.getElementById('datacontent').innerHTML=\"$dataContent\";</script>";
$summary="";
$summary.="    <h3>Summary</h3><input type='text' id='subtotal' name='subtotal' value='$subtotal' hidden/>";
 $summary.="   <div class='summary-item'><span class='text  ml-2'>Subtotal</span><span class='price mr-2' >$subtotal ₹ </span>";
 $summary.="       </div>";
 $summary.="           <div class='summary-item'><span class='text  ml-2'>Discount</span><span class='price mr-2'>0 ₹ </span></div>";
 $summary.="       <div class='summary-item'><span class='text  ml-2'>Shipping</span><span class='price mr-2'>0 ₹ </span></div>";
 $summary.="   <div class='summary-item' style='background:yellow;'><span class='text  ml-2'>Total</span><span class='price mr-2'>$subtotal ₹ </span></div>";
 $summary.="   <div class='summary-item'><span class='text  ml-2'>Enter Your Name and address</span><span class='price mr-2'>";
 $summary.="       <input type='text' placeholder='name' class='form-control mr-2 mt-1' name='name' id='name' />  <input type='text'placeholder='address' class='form-control mr-2 mt-1 mb-2' name='address' id='address' />";
 $summary.="       </span></div>";
 
 echo "<script>document.getElementById('summary').innerHTML=\"$summary\";</script>";


?>



</html>