<p>Chi tiết Sản Phẩm : </p>
<?php
    $sql_chitiet= "SELECT * FROM tbl_sanpham,tbl_danhmucqa WHERE tbl_sanpham.id_dm=tbl_danhmucqa.id_dm AND tbl_sanpham.id_sp='$_GET[id]' LIMIT 1";
    $query_chitiet= mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
	<div class="hinhanh_sanpham">
		<img width="100%" src="admincp/modules/quanLySanPham/uploads/<?php echo $row_chitiet['hinh_anh'] ?>">
	</div>
		<form method="POST" action="pages/main/themGioHang.php?idSanPham=<?php echo $row_chitiet['id_sp'] ?>">
			<div class="chitiet_sanpham">
			<h3>Ten San Pham: <?php echo $row_chitiet['ten_sp'] ?></h3>
			<p>Ma San Pham: <?php echo $row_chitiet['ma_sp'] ?></p>
			<p>Gia San Pham: <?php echo number_format($row_chitiet['gia_sp'],0,',','.').' VND ' ?></p>
			<p>So luong: <?php echo $row_chitiet['so_luong'] ?></p>
			<p>Danh Muc San Pham: <?php echo $row_chitiet['name_sp'] ?></p>
			<p><input class="them_giohang" type="submit" value="Them Vao Gio Hang" name="themGioHang"></p>
			</div>
		</form>		
</div>
<?php 
} ?>