<?php 	
	session_start();
	include('../../admincp/config/config.php');
	//them so luong
	if(isset($_GET['cong'])){
		$id=$_GET['cong'];
		foreach($_SESSION['cart'] as $cart_item) {
			if ($cart_item['id']!=$id) {
			$pro [] =array('ten_sp'=>$cart_item['ten_sp'], 'id'=>$cart_item['id'], 'so_luong'=>$cart_item['so_luong'], 'gia_sp'=>$cart_item['gia_sp'], 'hinh_anh'=>$cart_item['hinh_anh'], 'ma_sp'=>$cart_item['ma_sp']);	
			$_SESSION['cart'] = $pro;
		}else{
			if($cart_item['so_luong']<=10){
				$tangsoluong = min(10, $cart_item['so_luong'] + 1);
				$pro [] =array('ten_sp'=>$cart_item['ten_sp'], 'id'=>$cart_item['id'], 'so_luong'=>$tangsoluong, 'gia_sp'=>$cart_item['gia_sp'], 'hinh_anh'=>$cart_item['hinh_anh'], 'ma_sp'=>$cart_item['ma_sp']);
			}else{
				$pro [] =array('ten_sp'=>$cart_item['ten_sp'], 'id'=>$cart_item['id'], 'so_luong'=>$tangsoluong, 'gia_sp'=>$cart_item['gia_sp'], 'hinh_anh'=>$cart_item['hinh_anh'], 'ma_sp'=>$cart_item['ma_sp']);
			}
			$_SESSION['cart'] = $pro;
		}
	}
		header('Location:../../index.php?quanly=gioHang');
		
	}
	// tru so luong
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['cart'] as $cart_item) {
			if ($cart_item['id']!=$id) {
			$pro [] =array('ten_sp'=>$cart_item['ten_sp'], 'id'=>$cart_item['id'], 'so_luong'=>$cart_item['so_luong'], 'gia_sp'=>$cart_item['gia_sp'], 'hinh_anh'=>$cart_item['hinh_anh'], 'ma_sp'=>$cart_item['ma_sp']);	
			$_SESSION['cart'] = $pro;
		}else{
			$giamsoluong = max(1, $cart_item['so_luong'] - 1);
			if($cart_item['so_luong'] > 1){
				$pro [] =array('ten_sp'=>$cart_item['ten_sp'], 'id'=>$cart_item['id'], 'so_luong'=>$giamsoluong, 'gia_sp'=>$cart_item['gia_sp'], 'hinh_anh'=>$cart_item['hinh_anh'], 'ma_sp'=>$cart_item['ma_sp']);
			}else{
				$pro [] =array('ten_sp'=>$cart_item['ten_sp'], 'id'=>$cart_item['id'], 'so_luong'=>$giamsoluong, 'gia_sp'=>$cart_item['gia_sp'], 'hinh_anh'=>$cart_item['hinh_anh'], 'ma_sp'=>$cart_item['ma_sp']);
			}
			$_SESSION['cart'] = $pro;
		}
	}
		header('Location:../../index.php?quanly=gioHang');
		
	}
	//them san pham vao gio hang
	//xoa san pham
	if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['cart'] as $cart_item) {
			if ($cart_item['id']!=$id) {
				$pro [] =array('ten_sp'=>$cart_item['ten_sp'], 'id'=>$cart_item['id'], 'so_luong'=>$cart_item['so_luong'], 'gia_sp'=>$cart_item['gia_sp'], 'hinh_anh'=>$cart_item['hinh_anh'], 'ma_sp'=>$cart_item['ma_sp']);
			}
			$_SESSION['cart'] = $pro;
			header('Location:../../index.php?quanly=gioHang');
		}
	}
	//xoa tat ca
	if(isset($_GET['xoatatca']) && $_GET['xoatatca']==1){
		unset($_SESSION['cart']);
		header('Location:../../index.php?quanly=gioHang');
	}
	// session_destroy();
	if(isset($_POST['themGioHang'])){
		$id = $_GET['idSanPham'];
		$so_luong=1;
		$sql = "SELECT * FROM tbl_sanpham WHERE id_sp='".$id."' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_array($query);
		if($row) {
			$new_pro = array(array('ten_sp'=>$row['ten_sp'], 'id'=>$id, 'so_luong'=>$so_luong, 'gia_sp'=>$row['gia_sp'], 'hinh_anh'=>$row['hinh_anh'], 'ma_sp'=>$row['ma_sp']));
			// check gio hang ton tai
			if(isset($_SESSION['cart'])){
				$found = false;
				foreach ($_SESSION['cart'] as $cart_item) {
					if($cart_item['id']==$id){
						$pro [] =array('ten_sp'=>$cart_item['ten_sp'], 'id'=>$cart_item['id'], 'so_luong'=>$cart_item['so_luong']+1, 'gia_sp'=>$cart_item['gia_sp'], 'hinh_anh'=>$cart_item['hinh_anh'], 'ma_sp'=>$cart_item['ma_sp']);
						$found = true;
					}else{
						$pro [] =array('ten_sp'=>$cart_item['ten_sp'], 'id'=>$cart_item['id'], 'so_luong'=>$cart_item['so_luong'], 'gia_sp'=>$cart_item['gia_sp'], 'hinh_anh'=>$cart_item['hinh_anh'], 'ma_sp'=>$cart_item['ma_sp']);
					}
				}
				if($found == false){
					$_SESSION['cart']=array_merge($pro,$new_pro);
				}else{
					$_SESSION['cart']=$pro;
				}
			}else{
				$_SESSION['cart']=$new_pro;
			}
		}
		header('Location:../../index.php?quanly=gioHang');
	}
?>