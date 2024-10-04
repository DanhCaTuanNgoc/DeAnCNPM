<?php
    $sql_bv= "SELECT * FROM tbl_bv WHERE tbl_bv.id_bv='$_GET[id]' LIMIT 1";
    $query_bv= mysqli_query($mysqli,$sql_bv);
    $query_bv_all= mysqli_query($mysqli,$sql_bv);
    $row_bv_title= mysqli_fetch_array($query_bv);
?>
<h3>Bài viết: <span style="text-align: center; text-transform: uppercase"> <?php echo $row_bv_title['ten_bv'] ?> </span> </h3>
<ul class="baiviet">
	<?php
		while($row_bv = mysqli_fetch_array($query_bv_all)){
	?>
	<li>
        <h2><?php echo $row_bv['ten_bv'] ?></h2>
		<!-- <img src="admincp/modules/quanLyBaiViet/uploads/<?php echo $row_bv['hinh_anh'] ?>"> -->
		<p class="product_name"><?php echo $row_bv['tom_tat'] ?></p>
        <p class="product_name"><?php echo $row_bv['noi_dung'] ?></p>
						
	</li>
	<?php 
	}
	?>
</ul>