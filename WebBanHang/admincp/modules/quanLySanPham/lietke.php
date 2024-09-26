<?php
	$sql_lietke= "SELECT * FROM tbl_sanpham,tbl_danhmucqa WHERE tbl_sanpham.id_dm=tbl_danhmucqa.id_dm ORDER BY id_sp DESC";
	$lietke= mysqli_query($mysqli,$sql_lietke);
?>
<h3>Liệt Kê Sản Phẩm</h3>
<table style="width: 100%; border-collapse: collapse;" border="1" >
	<tr>
		<th>Id</th>
 		<th>Tên San Pham</th>
 		<th>Hinh anh</th>
 		<th>gia</th>
 		<th>so luong</th>
 		<th>Danh Muc</th>
 		<th>ma sp</th>
 		<th>noi dung</th>
 		<th>tom tat</th>
 		<th>trang thai</th>
 	</tr>
 	<?php
 	$i = 0;
 	while ($row = mysqli_fetch_array($lietke)) {
 		$i ++;
 	?>
  	<tr>
  		<td> <?php echo $i ?></td>
  		<td> <?php echo $row['ten_sp'] ?></td>
  		<td><img src="modules/quanLySanPham/uploads/<?php echo $row['hinh_anh'] ?>"	width='150px'></td>
  		<td> <?php echo $row['gia_sp'] ?></td>
  		<td> <?php echo $row['so_luong'] ?></td>
  		<td> <?php echo $row['name_sp'] ?></td>
  		<td> <?php echo $row['ma_sp'] ?></td>
  		<td> <?php echo $row['tom_tat'] ?></td>
  		<td> <?php echo $row['noi_dung'] ?></td>
  		<td> <?php 
  				if($row['tinh_trang']== 1){
  					echo 'Kich hoat';
  				}else{
  					echo 'Ân';
  				} 
  			 ?>			
  		</td>
  		<td>
  			<a href="modules/quanLySanPham/xuly.php?idsp=<?php echo $row['ma_sp'] ?>">Xóa</a>

  			| 
  			<a href="?action=quanLySanPham&query=sua&idsp=<?php echo $row['ma_sp'] ?>">Sửa</a>

  		</td>
  	</tr>
  	<?php
  	}	
  	?>
</table>
 