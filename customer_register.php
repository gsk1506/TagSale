<?php 
error_reporting(0);
 include "conection.php";
session_start();
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
            <link rel="stylesheet" type="text/css" href="new_css/style.css">
            </style>
            <script src="js/book.js"></script>
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
                        <li class="nav-item active"><a class="nav-link" href="Product.php">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->
   <div class="container1">
                    <?php 
                    if (isset($_POST['save'])) {
                        date_default_timezone_set('Asia/Kolkata');
                        $date = date("m/d/Y h:i:s", time());

                        $create ="root";
                        $modify = "root";
                        $insert = "INSERT into tbl_customer (name, age, contact_no, address, item_code, login, createdBY, modifiedBY, createDateTime, modifiedDateTime) VALUES ('".$_POST["name"]."', '".$_POST["age"]."','".$_POST["contact_no"]."', '".$_POST["address"]."', '$item_code', '".$_POST["login"]."','$create', '$modify', '$date', '$date')";
                        $select = mysqli_query($conn, "SELECT `login` FROM `tbl_customer` WHERE `login` = '".$_POST['login']."'") or exit(mysqli_error($conn));
                             if(mysqli_num_rows($select)) {
                            echo "<script type='text/javascript'>
                            alert('The email address is already Exist.');
                            history.back();
                            </script>";
                            exit;
                              }
                        $data = mysqli_query($conn,$insert);   
                        if ($data) {
                         
                        $insert1 = "INSERT into tbl_user (role,login, password, createdBY, modifiedBY,createDateTime, modifiedDateTime) VALUES (3,'".$_POST["login"]."', '".$_POST["password"]."','$create', '$modify', '$date', '$date')"; 
                        $data1 = mysqli_query($conn,$insert1);
                        if (($data || $data1) > 0){
                            // $lastid = mysqli_insert_id($conn);
                            // $url = 'add_payment.php?id='.$id."&cust_id=".$lastid;
                         
                            echo "<script type='text/javascript'> document.location ='login.php'</script>";
                        }
                        }
                        else
                        {
                        echo "<b style= 'color:red;'>Add data unsucessfully</b>";  
                        }    
                        }
                    ?>     
                     <h1 style="text-align: center;">Add Detail</h1>
                     <input type="hidden" name="id" value="<?php echo $id; ?>">
                <form method="post" action="" onsubmit="return validate()">
                          <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Name" class="form-control" id="nm">
                            <div class="error"><span id="nmerr"></span></div>
                        </div>

                           <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="login"  placeholder="Email" class="form-control" id="log">
                            <div class="error"><span id="logerr"></span></div>
                            <div id="hidden_text"></div>
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
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" name="age" placeholder="Age" class="form-control" id="ag">
                            <div class="error"><span id="agerr"></span></div>
                        </div>  
                        <div class="form-group">
                            <label>Contact No</label>
                            <input type="text" name="contact_no" onkeypress="javascript:return isNumber(event)" placeholder="Contact No" class="form-control" id="ct">
                            <div class="error"><span id="cterr"></span></div>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Address" class="form-control" id="ad">
                            
                            <div class="error"><span id="aderr"></span></div>
                        </div>               
                      <input type="submit" class="btn btn-primary" onsubmit="return redirect()" name="save" value="Save" />
                </form>
   </div>	
<?php 
include "footer.php";
?>
</body>

</html>
