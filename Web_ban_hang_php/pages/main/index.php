<?php
    $sql_pro= "SELECT * FROM tbl_sanpham,tbl_danhmucqa WHERE tbl_sanpham.id_dm=tbl_danhmucqa.id_dm ORDER BY tbl_sanpham.id_sp DESC LIMIT 25";
    $query_pro= mysqli_query($mysqli,$sql_pro);
?>
<h3>Sản Phẩm Mới Nhất</h3>
<ul class="product_list">
	<?php 
	while($row = mysqli_fetch_array($query_pro)){
	?>
	<li>
		<a href="index.php?quanly=sanPham&id=<?php echo $row['id_sp']?>">
		<img src="admincp/modules/quanLySanPham/uploads/<?php echo $row['hinh_anh'] ?>">
		<p class="product_name"><?php echo $row['ten_sp'] ?></p>
		<p class="product_price"><?php echo number_format($row['gia_sp'],0,',','.').' VND ' ?></p>
		</a>
						
	</li>
	<?php 
	} ?>
</ul>