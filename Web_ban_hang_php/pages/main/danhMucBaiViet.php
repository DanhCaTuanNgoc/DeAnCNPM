<?php
    $sql_bv= "SELECT * FROM tbl_bv WHERE tbl_bv.id_bv='$_GET[id]' ORDER BY id_bv DESC";
    $query_bv= mysqli_query($mysqli,$sql_bv);
    $sql_name= "SELECT * FROM tbl_danhmucbv WHERE tbl_danhmucbv.id_bv='$_GET[id]' LIMIT 1";
    $query_name= mysqli_query($mysqli,$sql_name);
    $row_title= mysqli_fetch_array($query_name);
?>
<h3>Danh Mục Bài viết: <span style="text-align: center; text-transform: uppercase"> <?php echo $row_title['name_bv']?> </span>  </h3>
<ul class="product_list">
	<?php
		while($row_bv   = mysqli_fetch_array($query_bv)){
	?>
	<li style="text-decoration:none">
		<a  href="index.php?quanly=baiViet&id=<?php echo $row_bv['id_bv']?>	" >
		<img src="admincp/modules/quanLyBaiViet/uploads/<?php echo $row_bv['hinh_anh'] ?>">
		</a>
		<p class="product_name"><?php echo $row_bv['ten_bv'] ?></p>
        <p class="product_name"><?php echo $row_bv['tom_tat'] ?></p>
						
	</li>
	<?php 
	}
	?>
</ul>