<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page='';
	}
	if($page=='' || $page==1){
		$begin = 0;
	}else{
		$begin = ($page*5)-5;
	}
    $sql_pro= "SELECT * FROM tbl_sanpham,tbl_danhmucqa WHERE tbl_sanpham.id_dm=tbl_danhmucqa.id_dm ORDER BY tbl_sanpham.id_sp DESC LIMIT $begin,5";
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
<div style="clear:both;"></div>
<?php 
	$sql_page = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
	$row_count = mysqli_num_rows($sql_page);
	$trang =ceil($row_count/3);
?>
<p>Trang hien tai: <?php echo $page ?></p>
<ul class="list_page">
	<?php 
	for ($i=1; $i < $trang ; $i++) {
	?>
	<li <?php if($i==$page){echo 'style="background: #e69833;"';}else{echo '';} ?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
	<?php 
	}
	?>
</ul>