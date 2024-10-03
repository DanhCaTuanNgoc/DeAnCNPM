<div class="sidebar">
	<h4 style="text-align:center;">Danh mục quần áo</h4>
				<ul class="list_sidebar">
					<?php
					    $sql_danhmuc= "SELECT * FROM tbl_danhmucqa ORDER BY id_dm DESC";
					    $sql_query= mysqli_query($mysqli,$sql_danhmuc);
					    while ($row = mysqli_fetch_array($sql_query)) {
					?>
					<li style="text-transform: uppercase;"><a href="index.php?quanly=danhMucSanPham&id=<?php echo $row['id_dm']?>"><?php echo $row['name_sp'] ?></a></li>
					<?php 
					}
					 ?>
				</ul>

	<h4 style="text-align:center;">Danh mục bài viết</h4>
				<ul class="list_sidebar">
					<?php
					    $sql_danhmucbv= "SELECT * FROM tbl_danhmucbv ORDER BY id_bv DESC";
					    $sql_querybv= mysqli_query($mysqli,$sql_danhmucbv);
					    while ($row = mysqli_fetch_array($sql_querybv)) {
					?>
					<li style="text-transform: uppercase;"><a href="index.php?quanly=danhMucBaiViet&id=<?php echo $row['id_bv']?>"><?php echo $row['name_bv'] ?></a></li>
					<?php 
					}
					 ?>
				</ul>				
</div>