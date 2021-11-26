<?php 
include "conection.php";
$id = $_GET['id'];
$delete = "DELETE FROM tbl_payment where id = '$id'";
$query = mysqli_query($conn,$delete);
if ($query > 0) {
header('location:payment.php');
}
else
{
header('location:payment.php');
}
?>