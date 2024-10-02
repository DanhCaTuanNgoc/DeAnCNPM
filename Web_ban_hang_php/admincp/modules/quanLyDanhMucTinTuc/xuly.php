<?php
include('..//..//config/config.php');
$tenLoaitt = $_POST['name_tt'];
$thuTu = $_POST['thu_tu'];
if(isset($_POST['themDanhMuc'])){
	$sql_them= "INSERT INTO tbl_danhmuctt(name_tt,thu_tu) VALUE('".$tenLoaitt."','".$thuTu."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanLyDanhMucTinTuc&query=them');
}elseif(isset($_POST['suaDanhMuc'])) {
	$sql_update= "UPDATE tbl_danhmuctt SET name_tt='".$tenLoaitt."', thu_tu= '".$thuTu."'WHERE id_tt= '$_GET[idtt]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanLyDanhMucTinTuc&query=them');
}else{
	$id=$_GET['idtt'];
	$sql_xoa = "DELETE FROM tbl_danhmuctt WHERE id_tt='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanLyDanhMucTinTuc&query=them');
}
?>