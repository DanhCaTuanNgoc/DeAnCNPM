<h3>Tin tức mới nhất</h3>
<?php
    $sql_bv= "SELECT * FROM tbl_baiviet WHERE tinhtrang=1 ORDER BY id_bv DESC";
    $query_bv= mysqli_query($mysqli,$sql_bv);
    
?>
<h3>Danh Mục Bài viết: <?php echo $row_title['name_bv'] ?></h3>
<ul class="product_list">
	<?php
		while($row_bv   = mysqli_fetch_array($query_bv)){
	?>
	<li>
		<a href="index.php?quanly=baiViet&id=<?php echo $row_bv['id_bv']?>	">
		<img src="admincp/modules/quanLyBaiViet/uploads/<?php echo $row_bv['hinh_anh'] ?>">
		<p class="product_name"><?php echo $row_bv['ten_bv'] ?></p>
		</a>
        <p class="product_name"><?php echo $row_bv['tomtat_bv'] ?></p>
						
	</li>
	<?php 
	}
	?>
</ul>