<div class="main">
			<?php
				include("sidebar/sidebar.php")
			?>
			<div class="maincontent">
				<?php
				if(isset($_GET['quanly'])) {
					$tam= $_GET['quanly']; 
				}else {
					$tam="";
				}
				if($tam=='danhMucSanPham') {
					include("main/danhMucSanPham.php");
				}elseif ($tam=='gioHang') {
					include("main/gioHang.php");
				}elseif ($tam=='tinTuc') {
					include("main/tinTuc.php");
				}elseif ($tam=='lienHe') {
					include("main/lienHe.php");
				}elseif ($tam=='sanPham') {
					include("main/sanPham.php");
				}elseif ($tam=='dangKy') {
					include("main/dangKy.php");
				}elseif ($tam=='thanhToan') {
					include("main/thanhToan.php");
				}elseif ($tam=='dangNhap') {
					include("main/dangNhap.php");
				}else{
					include("main/index.php");
				}
				?>	
			</div>
		</div>