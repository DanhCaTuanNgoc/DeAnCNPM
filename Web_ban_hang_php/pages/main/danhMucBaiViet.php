<?php
    $sql_bv= "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id='$_GET[id]' ORDER BY id DESC";
    $query_bv= mysqli_query($mysqli,$sql_bv);
    $sql_name= "SELECT * FROM tbl_danhmuc_baiviet WHERE tbl_danhmuc_baiviet.id_baiviet='$_GET[id]' LIMIT 1";
    $query_name= mysqli_query($mysqli,$sql_name);
    $row_title= mysqli_fetch_array($query_name);
?>
<h3>Danh Mục Bài viết: <span style="text-align: center; text-transform: uppercase"> <?php echo $row_title['tendanhmuc_baiviet']?> </span>  </h3>
<ul class="product_list">
	<?php
		while($row_bv   = mysqli_fetch_array($query_bv)){
	?>
	<li style="text-decoration:none">
		<a  href="index.php?quanly=baiViet&id=<?php echo $row_bv['id']?>	" >
		<img src="admincp/modules/quanLyBaiViet/uploads/<?php echo $row_bv['hinhanh'] ?>">
		</a>
		<p class="product_name"><?php echo $row_bv['tenbaiviet'] ?></p>
        <p class="product_name"><?php echo $row_bv['tomtat'] ?></p>
						
	</li>
	<?php 
	}
	?>
</ul>
