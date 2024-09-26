<?php 
	if(isset($_GET['dangXuat']) && $_GET['dangXuat']==1){
		unset($_SESSION['dangNhap']);
		header('Location:login.php');
	}
 ?>
<p>
	<a href="index.php?dangXuat=1">
		Đăng xuất: 
		<?php if($_SESSION['dangNhap']) {
			echo $_SESSION['dangNhap'];	
		} ?>		
	</a>
</p>