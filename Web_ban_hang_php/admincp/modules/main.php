<div class="clear"></div>
<div class="main">
	<?php
				if(isset($_GET['action']) && $_GET['query']){
					$tam= $_GET['action']; 
					$query= $_GET['query']; 
				}else {
					$tam="";
					$query=""; 
				}
				if($tam=='quanLyDanhMucSanPham' && $query=='them') {
					include("modules/quanLyDanhMucSanPham/them.php");
					include("modules/quanLyDanhMucSanPham/lietke.php");
				}elseif ($tam == 'quanLyDanhMucSanPham' && $query=='sua'){
    				include("modules/quanLyDanhMucSanPham/sua.php");
				}elseif ($tam == 'quanLySanPham' && $query=='them'){
    				include("modules/quanLySanPham/them.php");
					include("modules/quanLySanPham/lietke.php");
				}elseif ($tam == 'quanLySanPham' && $query=='sua'){
    				include("modules/quanLySanPham/sua.php");
				}else {
					include("modules/dashboard.php");
				}
	?>

</div>
