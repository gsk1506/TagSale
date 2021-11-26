<?php
include "conection.php";
$id=$_GET['id'];
$select="SELECT * FROM tbl_product where id = '$id'";
$data = mysqli_query($conn,$select);
$image=mysqli_fetch_array($data);
$img = $image['image'];
unlink('D:/xamp server/htdocs/freshshop/image/'.$img);
$delete = "DELETE FROM tbl_product where id = '$id'";
$query = mysqli_query($conn,$delete);
if ($query > 0) {	
header('location:product_list.php');
}
else
{
header('location:product_list.php');	
}
?>