<?php 
include "conection.php";
session_start();
 $login  = $_SESSION['login_id'];
$role = $_SESSION['user_type'];
if ($role==3) {

}
else{
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
<link rel="stylesheet" type="text/css" href="new_css/style13.css">
            <script src="js/book.js"></script>
            <script src="new_js/validate1.js"> </script>
             
           
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
                    <a class="navbar-brand" href="welcome.php"><b><span style="margin-left: 70px;" class="color1">Tag</span><span style="margin-left: 70px;" class="color2">Sale</span></b></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="welcome.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="book_product.php">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
    <div>
        <?php
        $get_id  = $_GET['id'];
        $select = "SELECT * FROM tbl_product where id = '$get_id'";
        $data = mysqli_query($conn,$select);
        while ($row = mysqli_fetch_array($data)) {    
        $image = $row['image'];
        $product_name = $row['product_name'];
        $price = $row['price'];
        $product_id = $row['id'];
        }
         ?>
         <div class="img-block"> 
         <div class="clearfix">     
         <div class="f_left">   
         <img style="width: 225px;height: 225px;" src="http://localhost/freshshop/image/<?php echo $image; ?>">
         </div>
         <div class="f_right">
          <h2><?php echo $product_name ?></h2>
          <!-- <span>73 reviews</span> -->
          <h3>Current price:  <b>$<?php echo $price ?></b></h3>
         </div>
         </div>
         </div>
    </div>
                     <div class="container1">
                     <h1 style="text-align: center;">Add Payment Detail</h1>
                     <?php
                    $user = "SELECT login FROM tbl_user where login = '$login'";
                    $qry = mysqli_query($conn,$user);
                    $value = mysqli_fetch_array($qry);
                    $login_id = $value['login'];
                    $select = "SELECT * FROM tbl_customer where login = '$login_id'";
                    $data = mysqli_query($conn,$select);
                    while ($row = mysqli_fetch_array($data)) {
                    $customer_id = $row['id'];
                    } 
                    date_default_timezone_set('Asia/Kolkata');
                        $date = date("m/d/Y h:i:s", time());

                        $create =$login;
                        $modify = $login;
                        
                    if (isset($_POST['save'])) {
                    $insert = "INSERT INTO tbl_payment (product_id, customer_id, payment_date, amount, createdBY, modifiedBY, creatDateTime, modifiedDateTime, login) values ('$product_id', '$customer_id', '".$_POST['payment_date']."','$price', '$create', '$modify', '$date', '$date', '$login')";
                    $qr = mysqli_query($conn,$insert);
                    if ($qr > 0) {
                    echo "<i style = 'color:green'>add_payment successfully</i>";
                    }
                    else
                    {
                       echo "<i style = 'color:red'>add_payment unsuccessfully</i>"; 
                    }
                    }
                      ?>
                <form method="post" onsubmit="return validate()">
                          <div class="form-group">
                            <label>Card Holder Name</label>
                            <input type="text" name="name" placeholder="Card Holder Name" class="form-control" id="nm">
                            <div class="error"><span id="nmerr"></span></div>
                        </div>
                        <div class="form-group">
                            <label>Card Number</label>
                            <input type="text" name="card_number" onkeypress="javascript:return isNumber(event)" placeholder="Card Number" class="form-control" id="no">
                            <div class="error"><span id="noerr"></span></div>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" name="payment_date" placeholder="Date" class="form-control" id="dt">
                            <div class="error"><span id="dterr"></span></div>
                        </div>  
                        
                        <div class="form-group">
                            <label>CVV</label>
                            <input type="text" name="cvv" placeholder="CVV" onkeypress="javascript:return isNumber(event)" class="form-control" id="cv">
                            <div class="error"><span id="cverr"></span></div>
                        </div>               
                      <input type="submit" class="btn btn-primary" name="save" value="Save">

                </form>
   </div>	
<?php 
include "footer.php";
?>
</body>

</html>