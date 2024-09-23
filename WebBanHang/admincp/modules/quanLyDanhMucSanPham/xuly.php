<?php
include('..//..//config/config.php');
$tenLoaisp = $_POST['tendanhmuc'];
$thuTu = $_POST['thutu'];
if(isset($_POST['themDanhMuc'])){
	$sql_them= "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE('".$tenLoaisp."','".$thuTu."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanLyDanhMucSanPham&query=them');
}elseif(isset($_POST['suaDanhMuc'])) {
	$sql_update= "UPDATE tbl_danhmuc SET tendanhmuc='".$tenLoaisp."', thutu= '".$thuTu."'WHERE id_danhmuc= '$_GET[id_dm]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanLyDanhMucSanPham&query=them');
}else{
	$id=$_GET['id_dm'];
	$sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanLyDanhMucSanPham&query=them');
}
?>