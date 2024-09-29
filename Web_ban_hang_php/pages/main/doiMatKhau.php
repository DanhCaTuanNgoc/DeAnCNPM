<?php
	if(isset($_POST['doiMatKhau'])){
		$taikhoan = $_POST['email'];
		$mat_khau_cu = md5($_POST['mat_khau_cu']);
		$mat_khau_moi = md5($_POST['mat_khau_moi']);
		$sql = "SELECT * FROM tbl_dangky WHERE email = '".$taikhoan."' AND mat_khau = '".$mat_khau_cu."' LIMIT 1 ";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count > 0){
			$sql_query = mysqli_query($mysqli,"UPDATE tbl_dangky SET mat_khau = '".$mat_khau_moi."' WHERE email='".$taikhoan."'");
			echo '<p style="color:green">Doi mat khau thanh cong</p>';
		}else{
			echo '<p>Tài khoản hoặc mật khẩu cu không đúng, vui lòng nhập lại</p>';
		}
	}
?>
		<form action="" autocomplete="off" method="POST">
		<table border="1" class="table_login" style="text-align: center; border-collapse: collapse;">
			<tr>
				<td colspan="2"><h3>Doi mat khau</h3></td>
			</tr>
			<tr>
				<td>Tài Khoản</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Mật Khẩu Cu</td>	
				<td><input type="text" name="mat_khau_cu"></td>
			</tr>
			<tr>
				<td>Mật Khẩu Moi</td>	
				<td><input type="text" name="mat_khau_moi"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="Submit" name="doiMatKhau" value="Doi mat khau"></td>
			</tr>
		</table>
		</form>
