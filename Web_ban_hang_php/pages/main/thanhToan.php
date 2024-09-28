<?php 
  session_start();
  include('../../admincp/config/config.php');
  	$id_khachhang = $_SESSION['id_khachhang'];
  	$ma_gh = rand(0,9999);
  	$insert_cart = "INSERT INTO tbl_giohang(id_khachhang,ma_gh,trang_thai) VALUE('".$id_khachhang."','".$ma_gh."',1)";
  		$cart_query = mysqli_query($mysqli,$insert_cart);
  		if($cart_query){
  			// add gio hang chi tiet
  			foreach($_SESSION['cart'] as $key => $value){
  				$id_sp = $value['id'];
  				$so_luong = $value['so_luong'];
  				$insert_order_details= "INSERT INTO tbl_chitiet_gh(ma_gh,id_sp,so_luong) VALUE('".$ma_gh."','".$id_sp."','".$so_luong."')";
  				mysqli_query($mysqli,$insert_order_details);
  			}
  		}
  		unset($_SESSION['cart']);
  		header('Location:../../index.php?quanly=camMon');

?>