<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <title>Update Product</title>
</head>

<body>
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="imges/ydll5syzcerukfrkg0kr.png" width="40px" class="img-circle elevation-2 mx-3" />
            MYSHOP.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="todaysProfit.php">Todays Profits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="overAllProfits.php">OverAll Profits</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="updateProduct.php">Update Product</a>
                </li>

            </ul>

        </div>


    </nav>
    <!--NAvBar-->

    <!--ADD PRODUCT-->
    <form method="post">

        <div class="input-group  m-4 col-8">
            <input type="search" class="form-control form-control-lg" placeholder="enter id"
            name="search_id"
               >
            <div class="input-group-append">
                <button type="submit" name="search" class="btn btn-lg btn-default">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        </div>
    </form>



    
    <div name="Cardcontent" id="Cardcontent">
    </div>

    
    

    <!--ADD PRODUCT-->
    <!--Table of Product-->

    <!-- /.card-body -->

    </div>
    <!--Table of Product-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
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
</body>
<?php
require('config.php');
if(isset($_POST['search'])){
    $id=$_POST['search_id'];
$sql="SELECT * from product_details where product_id='$id'";
$result=$conn->query($sql);
$content="";
while($row=$result->fetch_array(MYSQLI_NUM)){
  //  print_r($row);
  $content.=" <form role='form' method='post' enctype='multipart/form-data'> <div class='card card-primary m-4'>";
  $content.="  <div class='card-header'><h3 class='card-title'>Update product</h3></div>";
  $content.="  <div><div class='card-body'><div class='row'><div class='form-group col-xl-6'>";
  $content.="  <label for='productName'>Product name</label>";
  $content.="  <input type='text' class='form-control' name='productName' placeholder='product name'  value='$row[1]'disabled>";
  $content.="<input type='text' name='getId' value='$row[3]' hidden/>";
  $content.="  </div><div class='form-group col-xl-6'><label for='productPrice'>Product price</label>";
  $content.="  <input type='number' class='form-control' name='productPrice' placeholder='price'  value='$row[2]'required></div>";
  $content.="  <div class='form-group col-xl-6'><label for='product_id'>PID</label>";
  $content.="  <input type='number' class='form-control' name='product_id' placeholder='product id' value='$row[3]'disabled>";
  $content.="  </div><div class='form-group col-xl-6'><label for='productQuantity'>Product quantity</label>";
  $content.="  <input type='number' class='form-control' name='productQuantity' placeholder='product quantity'required>";
  $content.="  </div>";
  $content.="  <div class='form-group col-xl-6'>";
  $content.="  <label for='productAddingBy'>Product adding by</label>";
  $content.="  <input type='email' class='form-control' name='productAddingBy' placeholder='Product adding by' value='$row[6]'disabled>";
  $content.="  </div><div class='form-group col-6'><label for='exampleInputPassword1'>Image Of product 1</label>";
  $content.="  <input type='file' class='form-control-file' accept='image/*' name='productImage1' placeholder='Upload Photo' required>";
  $content.="  </div><div class='form-group col-6'><label for='exampleInputPassword1'>Image Of product 2</label>";
  $content.="  <input type='file' class='form-control-file' accept='image/*' name='productImage2' placeholder='Upload Photo' required>";
  $content.="  </div><div class='form-group col-6'><label for='exampleInputPassword1'>Image Of product 3</label>";
  $content.="  <input type='file' class='form-control-file' accept='image/*' name='productImage3' placeholder='Upload Photo' required>";
  $content.="  </div><div class='form-group col-6'><label for='exampleInputPassword1'>Image Of product 4</label>";
  $content.="  <input type='file' class='form-control-file' accept='image/*' name='productImage4' placeholder='Upload Photo' required>";
  $content.="  </div><div class='form-group col-6'><label for='exampleInputPassword1'>Image Of product 5</label>";
  $content.="  <input type='file' class='form-control-file' accept='image/*' name='productImage5' placeholder='Upload Photo' required>";
  $content.="  </div><div class='form-group col-12'><label>Product Description</label>";
  $content.="  <textarea class='form-control' rows='3' placeholder='Enter ...' name='product_desc' value='$row[4]'  required>$row[4]</textarea>";
  $content.="  </div> </div></div><div class='card-footer '>";
  $content.="  <div class='row d-flex justify-content-center'>";
  $content.="  <button type='submit1' name='update' class='btn btn-primary col-5'>Update</button></form><form method='post' class='col-5'>";
  $content.="  <input type='text' name='getId' value='$row[3]' hidden/><button type='submit2' name='delete' class='btn btn-danger  ml-2'>Delete</button></form></div></div>";
  $content.="  </div></div>";



    //print_r($row);
}
//print_r($content);
echo "<script>document.getElementById('Cardcontent').innerHTML=\"$content\";</script>";

}
if(isset($_POST['delete'])){
    $del=$_POST['getId'];
    $sqlDel=" delete from product_details where product_id='$del'";
    if($conn->query($sqlDel)){
        echo "<script>alert('Product Deleted Successfully');</script>";
    }

    //echo $_POST['getId'];
}
if(isset($_POST['update'])){
  //  print_r($_POST);
 //   print_r($_FILES);
    $productprice=$_POST['productPrice'];
    $product_id=$_POST['getId'];
    $fileName1 = $_FILES['productImage1']['name'];
    $path1 = "product_img/" . rand(1, 1100000) . $fileName1;
    $fileName2 = $_FILES['productImage2']['name'];
    $path2 = "product_img/" . rand(1, 1100000) . $fileName2;
    $fileName3 = $_FILES['productImage3']['name'];
    $path3 = "product_img/" . rand(1, 1100000) . $fileName3;
    $fileName4 = $_FILES['productImage4']['name'];
    $path4 = "product_img/" . rand(1, 1100000) . $fileName4;
    $fileName5 = $_FILES['productImage5']['name'];
    $path5 = "product_img/" . rand(1, 1100000) . $fileName5;

    move_uploaded_file($_FILES['productImage1']['tmp_name'], $path1);
    move_uploaded_file($_FILES['productImage2']['tmp_name'], $path2);
    move_uploaded_file($_FILES['productImage3']['tmp_name'], $path3);
    move_uploaded_file($_FILES['productImage4']['tmp_name'], $path4);
    move_uploaded_file($_FILES['productImage5']['tmp_name'], $path5);


    $sqlUpdate="update product_details set productPrice=$productprice,productImage1='$path1',productImage2='$path2',productImage3='$path3',productImage1='$path4',productImage1='$path4',productImage5='$path5' where product_id='$product_id'";
    if($conn->query($sqlUpdate)){
        echo "<script>alert('Product Updated Successfully');</script>";
    }
}
?>

</html>