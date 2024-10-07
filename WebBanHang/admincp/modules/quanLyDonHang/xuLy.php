<?php 
include('..//..//config/config.php');
if(isset($_GET['code'])){
	$code_gh = $_GET['code'];
	$sql = "UPDATE tbl_giohang  SET trang_thai=0 WHERE ma_gh='".$code_gh."'";
	$query = mysqli_query($mysqli,$sql);
	header('Location:../../index.php?action=quanLyDonHang&query=lietke');
}
?>

