<div class="sidebar">
				<ul class="list_sidebar">
					<?php
					    $sql_danhmuc= "SELECT * FROM tbl_danhmucqa ORDER BY id_dm DESC";
					    $sql_query= mysqli_query($mysqli,$sql_danhmuc);
					    while ($row = mysqli_fetch_array($sql_query)) {
					?>
					<li><a href="index.php?quanly=danhMucSanPham&id=<?php echo $row['id_dm']?>"><?php echo $row['name_sp'] ?></a></li>
					<?php 
					}
					 ?>
			</ul>
			</div>