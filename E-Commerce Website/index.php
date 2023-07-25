<!doctype html>
<html lang="en">

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
    <title>Home</title>
</head>

<body>
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
        <img src="imges/ydll5syzcerukfrkg0kr.png" width="40px" class="img-circle elevation-2 mx-3"/>
        MYSHOP.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
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


    </nav>
    <!--NAvBar-->

    <!--ADD PRODUCT-->
    <div class="card card-primary m-4">
        <div class="card-header">
            <h3 class="card-title">Add product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-xl-6">
                        <label for="productName">Product name</label>
                        <input type="text" class="form-control" name="productName" placeholder="product name" required>
                    </div>
                    <div class="form-group col-xl-6">
                        <label for="productPrice">Product price</label>
                        <input type="number" class="form-control" name="productPrice" placeholder="price" required>
                    </div>
                    <div class="form-group col-xl-6">
                        <label for="product_id">PID</label>
                        <input type="number" class="form-control" name="product_id" placeholder="product id" required>
                    </div>
                    <div class="form-group col-xl-6">
                        <label for="productQuantity">Product quantity</label>
                        <input type="number" class="form-control" name="productQuantity" placeholder="product quantity"required>
                    </div>
                    <div class="form-group col-xl-6">
                        <label for="productAddingBy">Product adding by</label>
                        <input type="email" class="form-control" name="productAddingBy" placeholder="Product adding by"required>
                    </div>
                    <!--Image 1-->
                    <div class="form-group col-6">
                        <label for="exampleInputPassword1">Image Of product 1</label>
                        <input type="file" class="form-control-file" accept="image/*" name="productImage1" placeholder="Upload Photo" required>
                    </div>
                    <!--Image 2-->
                    <div class="form-group col-6">
                        <label for="exampleInputPassword1">Image Of product 2</label>
                        <input type="file" class="form-control-file" accept="image/*" name="productImage2" placeholder="Upload Photo" required>
                    </div>
                    <!--Image 3-->
                    <div class="form-group col-6">
                        <label for="exampleInputPassword1">Image Of product 3</label>
                        <input type="file" class="form-control-file" accept="image/*" name="productImage3" placeholder="Upload Photo" required>
                    </div>
                    <!--Image 4-->
                    <div class="form-group col-6">
                        <label for="exampleInputPassword1">Image Of product 4</label>
                        <input type="file" class="form-control-file" accept="image/*" name="productImage4" placeholder="Upload Photo" required>
                    </div>
                    <!--Image 5-->
                    <div class="form-group col-6">
                        <label for="exampleInputPassword1">Image Of product 5</label>
                        <input type="file" class="form-control-file" accept="image/*" name="productImage5" placeholder="Upload Photo" required>
                    </div>
                    <div class="form-group col-12">
                        <label>Product Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="product_desc" required></textarea>
                    </div>


                </div>
            </div>
            <!-- /.card-body -->


            <div class="card-footer ">
                <button type="submit" name="submit" class="btn btn-primary col-12">Add</button>
            </div>
        </form>
    </div>

    <!--ADD PRODUCT-->
    <!--Table of Product-->
    <div class="card m-4">
        <div class="card-header">
            <h3 class="card-title">Product Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Available Quantity</th>
                        <th>Sold Percentage</th>
                        <th>Total Income</th>
                    </tr>
                </thead>
                <tbody id='rowContent'>
                  
                    

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->

    </div>
    <!--Table of Product-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
if (isset($_POST['submit'])) {
   // print_r($_FILES);
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

    $productName        = $_POST['productName'];
    $productPrice    = $_POST['productPrice'];
    $product_id    = $_POST['product_id'];
    $productQuantity    = $_POST['productQuantity'];
    $productAddingBy    = $_POST['productAddingBy'];
    $desc=$_POST['product_desc'];
    $sql = "INSERT into product_details  (productName,productPrice,product_id,productDesc,productQuantity,productAddingBy,productImage1,productImage2,productImage3,productImage4,productImage5)
   values('$productName',$productPrice,$product_id,'$desc',$productQuantity,'$productAddingBy','$path1','$path2','$path3','$path4','$path5')
   ";
    if ($conn->query($sql)) {
        echo "<script>alert('Product Added successfully');</script>";
    } else {
       
            $sql="UPDATE product_details SET 
            productName='$productName',productPrice=$productPrice,productDesc='$desc',productQuantity=$productQuantity,productAddingBy='$productAddingBy',productImage1='$path1',productImage2='$path2',productImage3='$path3',productImage4='$path4',productImage5='$path5'
             where product_id=$product_id";
            if($conn->query($sql)){
                echo "<script>alert('Product Updated successfully');</script>";
            }
            else{
                echo "<script>alert('Something wnet Wrong');</script>";
                print_r($conn->error_list) ;
            }
        
    }
}

$sql="SELECT * from product_details";
$resultMain=$conn->query($sql);
$tableData="";
$m=1;
while($row=$resultMain->fetch_array(MYSQLI_NUM)){
   // print_r($row);
    $per=($row[12]/$row[3])*100;
    $total=$row[12]*$row[2];
    echo "$<br>";
 $tableData.="   <tr>";
 $tableData.="   <td>$row[0]</td>";
 $tableData.="   <td>$row[1]</td>";
 $tableData.="   <td>$row[2]</td>";
 $tableData.="   <td>$row[5]</td>";
 $tableData.="   <td>";
 $tableData.="       <div class='progress progress-sm'>";
 if($per>70 && $per <100){
    $tableData.="           <div class='progress-bar progress-bar-success' style='width: $per%'>";
    $tableData.="               <span class='badge bg-success' >$per%</span>";
 }
 else if($per>35 && $per<=70){
    $tableData.="           <div class='progress-bar progress-bar-warning' style='width: $per%'>";
    $tableData.="               <span class='badge bg-warning' >$per%</span>";

 }
 else{
    $tableData.="           <div class='progress-bar progress-bar-danger' style='width: $per%'>";
 $tableData.="               <span class='badge bg-danger' >$per%</span>";

 }
 $tableData.="           </div>";
 $tableData.="       </div>";
 $tableData.="   </td>";
 $tableData.="   <td style='font-weight: bold;'>$total</td>";
$tableData.="</tr>";
$m++;
}
echo "<script>document.getElementById('rowContent').innerHTML=\"$tableData\";</script>";
?>

</html>