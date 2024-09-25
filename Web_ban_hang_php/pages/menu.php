<?php
    $sql_danhmuc= "SELECT * FROM tbl_danhmucqa ORDER BY id_dm DESC";
    $sql_query= mysqli_query($mysqli,$sql_danhmuc);
?>
<div class="menu">
			<ul class="list_menu">
				<li><a href="index.php">Trang Chủ</a></li>
				<?php 
				while($row_danhmuc= mysqli_fetch_array($sql_query)){
				?>
				<li><a href="index.php?quanly=danhMucSanPham&id=<?php echo $row_danhmuc['id_dm']?>"><?php echo $row_danhmuc['name_sp']  ?></a></li>
				<?php 
				}
				?>
				<li><a href="index.php?quanly=gioHang">Gio Hàng</a></li>
				<li><a href="index.php?quanly=tinTuc">Tin Tuc</a></li>
				<li><a href="index.php?quanly=lienHe">Liên Hệ</a></li>


			</ul>
		</div>
		