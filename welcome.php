<?php 
include('conection.php');
 ob_start();
 session_start();
 ob_end_flush();  
$role = $_SESSION['user_type'];
if ($role==true) {

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
    <title>Welcome to TagSale</title>
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
<link rel="stylesheet" type="text/css" href="new_css/style11.css">
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
                       
                        <li class="nav-item active"><a class="nav-link" href="welcome.php">Home</a></li>    
                        <?php if($role==1){?>
                        <li class="nav-item"><a class="nav-link" href="add_manager.php">Add Admin</a></li>
                        <li class="nav-item"><a class="nav-link" href="add_product.php">Add Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="product_list.php">Product</a></li>
                    <?php } elseif($role==2){?>
                        <li class="nav-item"><a class="nav-link" href="add_product.php">Add Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="product_list.php">Product</a></li>
                    <?php } elseif ($role==3){ ?>
                        <li class="nav-item"><a class="nav-link" href="book_product.php">Product</a></li>
                    <?php } ?>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Categories  -->
    
    <div class="container1">
    <h1>Welcome to TagSale!!!</h1>       
    </div>
    <!-- End Categories -->
<?php 
include "footer.php";
?>
</body>

</html>