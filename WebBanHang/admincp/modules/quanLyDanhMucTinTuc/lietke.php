<?php
	$sql_lietke= "SELECT * FROM tbl_danhmuctt ORDER BY thu_tu ";
	$lietke= mysqli_query($mysqli,$sql_lietke);
?>
<h3>Liệt Kê Danh Mục Tin Tức</h3>
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
  		<td> <?php echo $row['name_tt'] ?></td>
  		<td>
  			<a href="modules/quanLyDanhMucTinTuc/xuly.php?idtt=<?php echo $row['id_tt'] ?>">Xóa</a>

  			| 
  			<a href="?action=quanLyDanhMucTinTuc&query=sua&idtt=<?php echo $row['id_tt'] ?>">Sửa</a>

  		</td>
  	</tr>
  	<?php
  	}	
  	?>
</table>
 