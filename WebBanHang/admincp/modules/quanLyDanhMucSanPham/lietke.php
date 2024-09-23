<?php
	$sql_lietke= "SELECT * FROM tbl_danhmuc ORDER BY thutu ";
	$lietke= mysqli_query($mysqli,$sql_lietke);
?>
<h3>Liệt Kê Danh Mục Sản Phẩm</h3>
<table style="width: 100%; border-collapse: collapse;" border="1" >
	<tr>
		<th>Id</th>
 		<th>Tên Danh Mục</th>
 		<th>Quản Lý</th>
 	</tr>
 	<?php
 	$i = 0;
 	while ($row = mysqli_fetch_array($lietke)) {
 		$i ++;
 	?>
  	<tr>
  		<td> <?php echo $i ?></td>
  		<td> <?php echo $row['tendanhmuc'] ?></td>
  		<td>
  			<a href="modules/quanLyDanhMucSanPham/xuly.php?id_dm=<?php echo $row['id_danhmuc'] ?>">Xóa</a>

  			| 
  			<a href="?action=quanLyDanhMucSanPham&query=sua&id_dm=<?php echo $row['id_danhmuc'] ?>">Sửa</a>

  		</td>
  	</tr>
  	<?php
  	}	
  	?>
</table>
 