    <?php 
    include "conection.php";
    session_start();
    $login = $_SESSION['login_id'];
  	$sql = "SELECT * FROM tbl_customer WHERE login ='$login'";
  	$results = mysqli_query($conn,$sql);
  	if (!$results) {
  	  echo "1";	
  	}else{
  	  echo '0';
  	}
?>