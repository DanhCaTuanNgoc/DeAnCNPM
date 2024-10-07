<?php
	$sql_lietke_danhmucbv= "SELECT * FROM tbl_danhmuc_baiviet ORDER BY thutu DESC ";
	$lietke_danhmucbv= mysqli_query($mysqli,$sql_lietke_danhmucbv);
?>
<h3>Liệt Kê Danh Mục Bài Viết</h3>
<table style="width: 100%; border-collapse: collapse;" border="1" >
	<tr>
		<th>Id</th>
 		<th>Tên Danh Mục Bài Viết</th>
 		<th>Quản Lý</th>
 	</tr>
 	<?php
 	$i = 0;
 	while ($row = mysqli_fetch_array($lietke_danhmucbv)) {
 		$i ++;
 	?>
  	<tr>
  		<td> <?php echo $i ?></td>
  		<td> <?php echo $row['tendanhmuc_baiviet'] ?></td>
  		<td>
  			<a href="modules/quanLyDanhMucBaiViet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>">Xóa</a>
  			| 
  			<a href="?action=quanLyDanhMucBaiViet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>">Sửa</a>

  		</td>
  	</tr>
  	<?php
  	}	
  	?>
</table>