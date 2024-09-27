<?php
    $sql_danhmuc= "SELECT * FROM tbl_danhmucqa ORDER BY id_dm DESC";
    $sql_query= mysqli_query($mysqli,$sql_danhmuc);
?>
<?php 
if (isset($_GET['dangXuat']) && $_GET['dangXuat']==1) {
	unset($_SESSION['dang_ky']);
}
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
				<?php  
				if (isset($_SESSION['dang_ky'])) {
				?>
				<li><a href="index.php?dangXuat=1">Đăng Xuất</a></li>
				<?php 
				}else{
				?>
				<li><a href="index.php?quanly=dangKy">Đăng Ký</a></li>
				<?php 
				}
				?>
				<li><a href="index.php?quanly=tinTuc">Tin Tuc</a></li>
				<li><a href="index.php?quanly=lienHe">Liên Hệ</a></li>


			</ul>
			<p>
				<form action="index.php?quanly=timKiem" method="GET">
				<input type="text" name="tuKhoa" placeholder="Tìm Kiếm Sản Phẩm">
				<input type="submit" name="timKiem" value="Tìm kiếm" >
				</form>
			</p>
		</div>
		