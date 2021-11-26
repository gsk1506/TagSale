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
<link rel="stylesheet" type="text/css" href="new_css/style4.css">
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
                        <li class="nav-item active"><a class="nav-link" href="book_product.php">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <?php 
                include "conection.php";
                $select = "SELECT * from tbl_product";
                $data = mysqli_query($conn,$select);
                while ($row = mysqli_fetch_array($data)) {
                $image = $row['image'];
                
                ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        
                        <img class="img-fluid" style="width: 350px; height: 195px;" src="http://localhost/TagSale/image/<?php echo $image; ?>" alt="" />
                        <div class="detail">
                            <span id="nm"><?php echo $row['product_name']; ?></span><br>
                           <span><b>₹<?php echo $row['price']; ?></b></span>
                        </div>
                        <a class="btn hvr-hover" href="add_payment.php?id=<?php echo $row['id']; ?>">BUY NOW</a>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- End Categories -->
<?php 
include "footer.php";
?>
</body>

</html>