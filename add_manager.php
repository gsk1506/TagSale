<?php 
include('conection.php');
 ob_start();
 session_start();
 ob_end_flush();  
$role = $_SESSION['user_type'];
if ($role==1) {

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
<link rel="stylesheet" type="text/css" href="new_css/style1.css">
           <script src="js/manage.js"></script>
            <script src="new_js/admin.js"></script>
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
                        <li class="nav-item active"><a class="nav-link" href="add_manager.php">Add Admin</a></li>
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
            <h1 style="text-align: center;">Add New Admin</h1>
                        <?php
                        include "conection.php";
                        $select = "SELECT * FROM tbl_user where role = '$role'";
                        $query = mysqli_query($conn,$select);
                        while ($row = mysqli_fetch_array($query)) {
                        $login = $row['login']; 
                        }
                        if (isset($_POST['save'])) {
                        $_SESSION['login'] = $_POST['login'];    
                        date_default_timezone_set('Asia/Kolkata');
                        $date = date("m/d/Y h:i:s", time());
                        $create = $login;
                        
                        $insert = "INSERT INTO tbl_user (role,login,password,createdBY,modifiedBY,createDateTime,modifiedDateTime) values (1,'".$_POST["login"]."', '".$_POST["password"]."','$create', '$create', '$date', '$date')";
                       $select = mysqli_query($conn, "SELECT `login` FROM `tbl_user` WHERE `login` = '".$_POST['login']."'") or exit(mysqli_error($conn));
                             if(mysqli_num_rows($select)) {
                            echo "<script type='text/javascript'>
                            alert('The email address is already Exist.');
                            history.back();
                            </script>";
                            exit;
                              }
                        $data = mysqli_query($conn,$insert);    
                        if ($data > 0) {  
                        echo "<b style= 'color:green;'>Add data sucessfully</b>";
                        }
                        else
                        {
                        echo "<b style= 'color:red;'>Add data unsucessfully</b>";  
                        }    
                        }
                        ?>
                <form method="post" onsubmit="return validate()">
                     <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="login" placeholder="Email" class="form-control" id="log">
                            <div class="error"><span id="logerr"></span></div>

                        </div>
                    
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" class="form-control" id="pass">
                            <div class="error"><span id="passerr"></span></div>
                        </div>

                       <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="pswrd" placeholder="Conform Password" class="form-control" id="conpass">
                            <div class="error"><span id="conpasserr"></span></div>
                        </div>
                        
                      <input type="submit" class="btn btn-primary" name="save" value="Save">

                </form>
   </div>	
	
<?php
include "footer.php";
?>

</body>

</html>