<h3 style="text-align: center; text-transform: uppercase">Tin tức mới nhất</h3>
<?php
    $sql_bv= "SELECT * FROM tbl_bv WHERE tinhtrang=1 ORDER BY id_bv DESC";
    $query_bv= mysqli_query($mysqli,$sql_bv);
    
?>
<ul class="product_list">
	<?php
		while($row_bv   = mysqli_fetch_array($query_bv)){
	?>
	<li>
		<a href="index.php?quanly=baiViet&id=<?php echo $row_bv['id_bv']?>	">
		<img src="admincp/modules/quanLyBaiViet/uploads/<?php echo $row_bv['hinh_anh'] ?>">
		</a>
		<p class="product_name"><?php echo $row_bv['ten_bv'] ?></p>
        <p class="product_name"><?php echo $row_bv['tom_tat'] ?></p>
						
	</li>
	<?php 
	}
	?>
</ul>