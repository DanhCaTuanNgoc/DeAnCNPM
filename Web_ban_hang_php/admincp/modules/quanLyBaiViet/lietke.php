<?php
	$sql_lietke= "SELECT * FROM tbl_baiviet,tbl_danhmuc_baiviet WHERE tbl_baiviet.id_danhmuc=tbl_danhmuc_baiviet.id_baiviet ORDER BY id DESC";
	$lietke= mysqli_query($mysqli,$sql_lietke);
?>
<h3>Liệt Kê Bài Viết</h3>
<table style="width: 100%; border-collapse: collapse;" border="1" >
	<tr>
		<th>Id</th>
 		<th>Tên Bài Viết</th>
 		<th>Hình ảnh</th>
 		<th>Mã Danh Mục</th>
 		<th>Nội Dung</th>
 		<th>Tóm Tắ</th>
 		<th>Trạng thái</th>
 	</tr>
 	<?php
 	$i = 0;
 	while ($row = mysqli_fetch_array($lietke)) {
 		$i ++;
 	?>
  	<tr>
  		<td> <?php echo $i ?></td>
  		<td> <?php echo $row['tenbaiviet'] ?></td>
  		<td><img src="modules/quanLybaiviet/uploads/<?php echo $row['hinhanh'] ?>"	width='150px'></td>
  		<td> <?php echo $row['id_danhmuc'] ?></td>
  		<td> <?php echo $row['tomtat'] ?></td>
  		<td> <?php echo $row['noidung'] ?></td>
  		<td> <?php 
  				if($row['tinhtrang']== 1){
  					echo 'Kích hoạt';
  				}else{
  					echo 'Ẩn';
  				} 
  			 ?>			
  		</td>
  		<td>
  			<a href="modules/quanLyBaiViet/xuly.php?idbv=<?php echo $row['id'] ?>">Xóa</a>

  			| 
  			<a href="?action=quanLyBaiViet&query=sua&idbv=<?php echo $row['id'] ?>">Sửa</a>

  		</td>
  	</tr>
  	<?php
  	}	
  	?>
</table>
 