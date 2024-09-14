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
				}else{
					include("main/index.php");
				}
				?>	
			</div>
		</div>