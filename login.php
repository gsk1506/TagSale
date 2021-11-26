<?php 
 include('conection.php');
 ob_start();
 session_start();
 ob_end_flush();                    
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
    <title>TagSale - Login</title>
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
<link rel="stylesheet" type="text/css" href="new_css/style15.css">
            <script src="new_js/validate3.js">  </script>          
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
                    <a class="navbar-brand" href="welcome.php"><b><span class="color1" style="color:#B0B435">Tag</span><span class="color2">Sale</span></b></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="Product.php">Product</a></li>
                        <li class="nav-item active"><a class="nav-link" href="login.php">Login</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
    <div class="log">
        <h1 class="login">Login</h1>
    </div>
   <div id="log">
   <div class="container1">
                     <?php
                     if (isset($_POST['login'])) {
                     $login_id = $_POST['login_id'];
                     $password = $_POST['pswrd'];

                     $select = "SELECT * FROM tbl_user WHERE login = '$login_id' and password = '$password'";
                    $data = mysqli_query($conn,$select);
                    $row = mysqli_fetch_array($data);
                    if ($row['login']==$login_id && $row['password']==$password) {
                    $role = $row['role'];
                    $id = $row['login'];
                    $_SESSION['login_id'] = $id;  
                    $_SESSION['user_type'] = $role; 
                    if ($role==1) {
                    $_SESSION['login'] = $id;
                    
                    echo "<script type='text/javascript'> document.location ='welcome.php'</script>";
                    }
                    elseif ($role==2) {
                    echo "<script type='text/javascript'> document.location ='welcome.php'</script>";
                    }     
                    elseif ($role==3) {
                    $_SESSION['login_id'] = $id; 
                    
                    echo "<script type='text/javascript'> document.location ='book_product.php'</script>";
                    }
                    }
                    else 
                    {
                    echo "<b class='b'>invalid username & password</b";  
                    }  
                    }
                     ?>
                     <?php
                      if(!empty($_GET['logout'])){
                             echo '<div style="color:green; font-weight:bold;">You have been logged out successfully</div>';
                      }
                      ?>
                <form method="post" onsubmit="return validate()">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>Login</label>
                            <input type="email" name="login_id" placeholder="Login" class="form-control" id="em">
                            <div class="error"><span id="emerr"></span></div>
                        </div>
                      </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pswrd" placeholder="Password" class="form-control" id="pass">
                            <div class="error"><span id="passerr"></span></div>
                        </div>
                      </div>
                      </div>
                      
                      <input type="submit" class="btn btn-primary" name="login" value="Login">

                </form>
   </div>	
 </div>	
<?php 
include "footer.php";
?>
</body>
</html>