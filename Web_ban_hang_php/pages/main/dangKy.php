<?php
	
	if(isset($_POST['dang_ky'])) {
		$ten_khachhang = $_POST['ten_khachhang'];
		$email = $_POST['email'];
		$dien_thoai = $_POST['dien_thoai'];
		$mat_khau = md5($_POST['mat_khau']);
		$dia_chi = $_POST['dia_chi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(ten_khachhang,email,dia_chi,mat_khau,dien_thoai) VALUE('".$ten_khachhang."','".$email."','".$dia_chi."','".$mat_khau."','".$dien_thoai."')");
		if($sql_dangky){
			echo '<p style="color:green">Bạn đăng ký thành công</p>';
			$_SESSION['dang_ky'] = $ten_khachhang;
			header('Location:index.php?quanly=gioHang');
		}
	} 
?>
<p>Dăng ký</p>
<style type="text/css">
table.dangKy tr td {
	padding: 2px;
}
</style>
<form action="" method="POST">
<table class="dangKy" border="1" width="60%" style="border-collapse: collapse;">
	<tr>
		<td>Họ và tên</td>
		<td><input type="text" size="63%" name="ten_khachhang"></td>
	</tr>
	<tr>
		<td>email</td>
		<td><input type="text" size="63%" name="email"></td>
	</tr>
	<tr>
		<td>Điện thoại</td>
		<td><input type="text" size="63%" name="dien_thoai"></td>
	</tr>
	<tr>
		<td>Địa chỉ</td>
		<td><input type="text" size="63%" name="dia_chi"></td>
	</tr>
	<tr>
		<td>Mật khẩu</td>
		<td><input type="text" size="63%" name="mat_khau"></td>
	</tr>
	<tr>
		<td ><input type="submit" name="dang_ky" value="Đăng ký"></td>
		<td><a href="index.php?quanly=dangNhap">Đăng Nhập</a></td>
	</tr>
</table>
</form>