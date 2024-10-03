<?php
    $sql_bv= "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_bv='$_GET[id]' ORDER BY id_bv DESC";
    $query_bv= mysqli_query($mysqli,$sql_bv);
    // get name_sp
    $sql_name= "SELECT * FROM tbl_danhmucbaiviet WHERE tbl_danhmucbaiviet.id_bv='$_GET[id]' LIMIT 1";
    $query_name= mysqli_query($mysqli,$sql_name);
    $row_title= mysqli_fetch_array($query_name);
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