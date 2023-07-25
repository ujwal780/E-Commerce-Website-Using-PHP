
<!doctype html>
<html lang="en">
<?php 
session_start();
//$_SESSION['mycart']=array();
//$_SESSION['mycartQuantity']=array();

if(! isset($_SESSION['mycart'])){
    $_SESSION['mycart']=array();
}
if(! isset($_SESSION['mycartQuantity'])){
    $_SESSION['mycartQuantity']=array();
}

?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
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
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <title>Sell Product</title>
</head>

<body>
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="index.php">
        <img src="imges/ydll5syzcerukfrkg0kr.png" width="40px" class="img-circle elevation-2 mx-3"/>

        MYSHOP.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="sellProduct.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="todaysProfit.php">Todays Profits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="overAllProfits.php">OverAll Profits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="updateProduct.php">Update Product</a>
                </li>
            


            </ul>

        </div>
     <!--   <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search Product" aria-label="Search" id="earch">
            <button class="btn btn-outline-success mx-2" type="submit">Search </button>
           
          </form>-->
          <button class="btn btn-outline-info mx-2" type="button" >
            <a href="myCart.php" class="btn-outline-info">
            <i class="fas fa-shopping-cart "></i>
            My Cart
          </a>
               </button>
    </nav>
    <!--NavBar-->
<!--Products-->
<form method="post">
<div class="row" id="products">

  <!--//////////////////////////////-->
 
  
</div>
</form>
<!--Products-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
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
    <script>
      function openDetails(data){
        localStorage.setItem("id",data);
        location.replace('productDetails.php');

       // alert(localStorage.getItem("id"));
      }
    </script>
</body>
<?php
require('config.php');
$sql="SELECT * from product_details where productQuantity>0";
$result=$conn->query($sql);
$content="";
$rowids=array();
$qunatities=array();
$data=array();
$i=0;
while($row=$result->fetch_array(MYSQLI_NUM)){
    array_push($data,$row);
    
  $content.="<div class='col-12 col-sm-6 col-md-4 d-flex align-items-stretch my-2'>";
  $content.=" <div class='card bg-light'>";
  $content.="  <div class='card-header text-muted border-bottom-0'>";
  $content.="    $row[1]";
  $content.="   </div>";
  $content.="<input type='text' name='idHidden' value='$row[3]' hidden/>";
  $content.="  <div class='card-body pt-0'>";
  $content.="   <div class='row'><div class='col-7'>";
  $content.="       <h2 class='lead'><b>Price -</b>$row[2]</h2>";
  $content.="       <p class='text-muted text-sm'><b>About: </b>$row[4] </p> ";
  $content.="       <p class='text-muted text-sm'><b>Available Quantity: </b>$row[5] </p>";
  $content.="       <p class='text-muted text-sm'><b>Product Owner: </b>$row[6] </p> ";
  $Quansubs="inp".$row[3];

  $content.="       <input type='number' name='$Quansubs'class='form-control quantity-input col-4' min='1' max='$row[5]' value='1' required/> </div>";
  

  $content.="        <div class='col-5 text-center'>";
  $content.="           <img src='$row[7]' style='width:150px;height:100px;' class='img-fluid'>";
  $content.="       </div> </div> </div>";
  $content.="   <div class='card-footer'>";
  $content.="     <div class='text-right'>";

  $subs="submit".$row[3];
  array_push($rowids,$row[3]);

  $content.="      <button type='submit' name='$subs' class='btn btn-sm bg-teal'>";
  $content.="         <i class='fas fa-info-circle'></i>";
  $content.="                    Product Details";
  $content.="      </button>";
  $subs="addtocart".$row[3];
  $content.="      <button class='btn btn-sm btn-primary' type='submit' name='$subs'>";
  $content.="        <i class='fas fa-cart-plus fa-lg'></i> Add to Cart";
  $content.="      </button>";
  $content.="    </div></div></div></div>";

 
  $i++;
}
for($i=0;$i<count($rowids);$i++){
    $temp="submit".$rowids[$i];
    if(isset($_POST[$temp])){
      $_SESSION['showDetails'] =$rowids[$i];
      echo "<script>location.replace('productDetails.php');      </script>";
    }

}
echo "<script>document.getElementById('products').innerHTML=\"$content\";</script>";
for($i=0;$i<count($rowids);$i++){
    $temp="addtocart".$rowids[$i];
    $quans="inp".$rowids[$i];
    if(isset($_POST[$temp])){
     array_push($_SESSION['mycart'],$rowids[$i]);
     array_push($_SESSION['mycartQuantity'],$_POST[$quans]);
    // print_r($_SESSION['mycartQuantity']);
    }

}
?>

</html>