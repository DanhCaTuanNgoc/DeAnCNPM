<?php
    $sql_pro= "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_dm='$_GET[id]' ORDER BY id_sp DESC";
    $query_pro= mysqli_query($mysqli,$sql_pro);
    // get name_sp
    $sql_name= "SELECT * FROM tbl_danhmucqa WHERE tbl_danhmucqa.id_dm='$_GET[id]' LIMIT 1";
    $query_name= mysqli_query($mysqli,$sql_name);
    $row_title= mysqli_fetch_array($query_name);
?>
<h3>Danh Mục Sản phẩm: <?php echo $row_title['name_sp'] ?></h3>
<ul class="product_list">
	<?php
		while($row_pro = mysqli_fetch_array($query_pro)){
	?>
	<li>
		<a href="index.php?quanly=sanPham&id=<?php echo $row_pro['id_sp']?>	">
		<img src="admincp/modules/quanLySanPham/uploads/<?php echo $row_pro['hinh_anh'] ?>">
		<p class="product_name"><?php echo $row_pro['ten_sp'] ?></p>
		<p class="product_price"><?php echo number_format($row_pro['gia_sp'],0,',','.').' VND ' ?></p>
		</a>
						
	</li>
	<?php 
	}
	?>
</ul>