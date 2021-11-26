<?php 
include('conection.php');
 ob_start();
 session_start();
 ob_end_flush();  
$role = $_SESSION['user_type'];
if (($role==1) || ($role==2)) {
    # code...
}
else
{
header('location:login.php');    
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>TagSale</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" type="text/css" href="new_css/style10.css">
            <script src="js/product.js"></script>
            <script type="text/javascript">
                function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }    
            </script>
           </head>

           <body>
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="welcome.php"><b><span class="color1">Tag</span><span class="color2">Sale</span></b></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="welcome.php">Home</a></li>
                        <?php if ($role==1) {?>
                        <li class="nav-item"><a class="nav-link" href="add_manager.php">Add Admin</a></li>
                        <?php }?>
                        <li class="nav-item"><a class="nav-link" href="add_product.php">Add Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="product_list.php">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
                     <div class="container1">
                      
                     <h1 style="text-align: center;">Edit Product</h1>
                     <?php
                     include "conection.php";
                     $id = $_GET['id'];
                     $_SESSION['pr_id'] = $id;
                     
                    
                      date_default_timezone_set('Asia/Kolkata');
                      $date = date("m/d/Y h:i:s", time());
                      $create = "root";
                      $modify = "root";
                      
                      if (isset($_POST['save'])) {
                      
                      $move_upload =  move_uploaded_file($_FILES['img']['tmp_name'],"D:/xamp server/htdocs/freshshop/image/" .$_FILES['img']['name']);
                         $upload = $_FILES['img']['name'];
                         
                         if ($move_upload) {
                        
                        //unlink('D:/xamp server/htdocs/freshshop/image/'.$old_img); 
                        $img = $upload;
                          $update = "UPDATE tbl_product set item_code = '$_POST[item_code]', product_name = '$_POST[product_name]', product_quantity = '$_POST[product_quantity]', product_choice = '$_POST[product_choice]', price = '$_POST[price]', image ='$img', createdBY = '$create', modifiedBY = '$modify', creteDateTime = '$date',modifiedDate = '$date' where id = '$id'";
                        }else{
                         

                        $update = "UPDATE tbl_product set item_code = '$_POST[item_code]', product_name = '$_POST[product_name]', product_quantity = '$_POST[product_quantity]', product_choice = '$_POST[product_choice]', price = '$_POST[price]', createdBY = '$create', modifiedBY = '$modify', creteDateTime = '$date',modifiedDate = '$date' where id = '$id'";
                         //echo $update;
                       }

                        $data = mysqli_query($conn,$update);
                        if ($data > 0) {
                        echo "<b style= 'color:green;'>Update data sucessfully</b>";
                        }
                        else
                        {
                        echo "<b style= 'color:red;'>Update data unsucessfully</b>";  
                        }
                        } 

                        $select = "SELECT * from tbl_product where id = '$id'";
                     $data = mysqli_query($conn,$select);
                     while ($row = mysqli_fetch_array($data)) {
                     $image = $row['image'];
                     $product_name = $row['product_name'];
                     $price = $row['price'];
                     $item_code = $row['item_code'];
                     $quantitiy = $row['product_quantity'];
                     $choice    = $row['product_choice'];
                     
                     }              
                      ?>
                <form method="post" onsubmit="return validate()" enctype=multipart/form-data>
                          <div class="form-group">
                            <label>Product Code</label>
                            <input type="text" name="item_code" value="<?php echo $item_code; ?>" onkeypress="javascript:return isNumber(event)" placeholder="Product Code" class="form-control" id="pc">
                            <div class="error"><span id="pcerr"></span></div>
                        </div>

                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="product_name" value="<?php echo $product_name; ?>" placeholder="Product Name" class="form-control" id="pn">
                            <div class="error"><span id="pnerr"></span></div>
                        </div>   

                        <div class="form-group">
                            <label>Product Quantitiy</label>
                            <input type="text" name="product_quantity" value="<?php echo $quantitiy; ?>" onkeypress="javascript:return isNumber(event)" placeholder="Product Quantitiy" class="form-control" id="qty">
                            <div class="error"><span id="qtyerr"></span></div>
                        </div>

                       <div class="form-group">
                            <label>Product Choice</label>
                            <input type="text" name="product_choice" value="<?php echo $choice; ?>" placeholder="Product Choice" class="form-control" id="prch">
                            <div class="error"><span id="prcherr"></span></div>
                        </div>
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="text" name="price" value="<?php echo $price; ?>" onkeypress="javascript:return isNumber(event)" placeholder="Product Price" class="form-control" id="pr">
                            <div class="error"><span id="prerr"></span></div>
                        </div>  
                        <div class="form-group">
                            <img style="width: 50px;height: 50px;" src="http://localhost/TagSale/image/<?php echo $image; ?>"><br>
                            <label>Product Image</label>

                            <input type="file" name="img" class="form-control" id="f2"  value="<?php echo $image; ?>">
                          
                            <div class="error"><span id="flerr"></span></div>
                        </div>             
                      <input type="submit" class="btn btn-primary" name="save" value="Update">

                </form>
   </div>	
	

<?php 
include "footer.php";
?>
    <!-- Start Footer  -->
    
</body>

</html>