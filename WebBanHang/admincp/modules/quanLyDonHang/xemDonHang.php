<h3>Xem Don Hang</h3>
<?php
	$code = $_GET['code'];
	$sql_lietke_dh= "SELECT * FROM tbl_chitiet_gh,tbl_sanpham WHERE tbl_chitiet_gh.id_sp = tbl_sanpham.id_sp AND tbl_chitiet_gh.ma_gh='".$code."' ORDER BY tbl_chitiet_gh.id_ctgh DESC ";
	$lietke_dh= mysqli_query($mysqli,$sql_lietke_dh);
?>

<table style="width: 100%; border-collapse: collapse;" border="1" >
	<tr>
		<th>Id</th>
 		<th>Ma Gio Hang</th>
 		<th>Ten San pham</th>
 		<th>so luong</th>
 		<th>Don gia</th>
 		<th>thanh tien</th>
 	</tr>
 	<?php
 	$i = 0;
 	$tongtien=0;
 	while ($row = mysqli_fetch_array($lietke_dh)) {
 		$i ++;
 		$thanhtien= $row['so_luong_mua']*$row['gia_sp'];
 		$tongtien+=$thanhtien;
 	?>
  	<tr>
  		<td> <?php echo $i ?></td>
  		<td> <?php echo $row['ma_gh'] ?></td>
  		<td> <?php echo $row['ten_sp'] ?></td>
  		<td> <?php echo $row['so_luong_mua'] ?></td>
  		<td><?php echo number_format($row['gia_sp'],0,',','.').' VND ' ?></td>
  		<td><?php echo number_format($thanhtien,0,',','.').' VND ' ?></td>
  	</tr>
  	<?php
  	}	
  	?>
  	<td colspan="6">
  			<p>Tong tien : <?php echo number_format($tongtien,0,',','.').' VND ' ?></p>
  		</td>
</table>
 