<?php
	if(isset($_POST['dangNhap'])){
		$email = $_POST['email'];
		$mat_khau = md5($_POST['mat_khau']);
		$sql = "SELECT * FROM tbl_dangky WHERE email = '".$email."' AND mat_khau = '".$mat_khau."' LIMIT 1 ";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count > 0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dang_ky'] = $row_data['ten_khachhang'];
			$_SESSION['id_khachhang'] = $row_data['id_dangky'];
			header("Location:index.php?quanly=gioHang");
		}else{
			echo '<p style="color:red">Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại</p>';
		}
	}
?>
<form action="" autocomplete="off" method="POST">
		<table border="1" class="table_login" style="text-align: center; border-collapse: collapse;">
			<tr>
				<td colspan="2"><h3>ĐĂNG NHẬP KHÁCH HÀNG</h3></td>
			</tr>
			<tr>
				<td>Tài Khoản</td>
				<td><input type="text" name="email" placeholder="Email..."></td>
			</tr>
			<tr>
				<td>Mật Khẩu</td>	
				<td><input type="password" name="mat_khau" placeholder="Mật Khẩu..."></td>
			</tr>
			<tr>
				<td colspan="2"><input type="Submit" name="dangNhap" value="ĐĂNG NHẬP"></td>
			</tr>
		</table>
		</form>