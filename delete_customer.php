<?php 
include "conection.php";
$get_id = $_GET['id'];
$delete = "DELETE tbl_customer, tbl_user FROM tbl_customer INNER JOIN tbl_user ON tbl_customer.login = tbl_user.login WHERE tbl_customer.id = '$get_id'; and tbl_user.role = 3";

$query = mysqli_query($conn,$delete);
if ($query > 0) {
header('location:customer.php');	
}
else
{
header('location:customer.php');
}
?>