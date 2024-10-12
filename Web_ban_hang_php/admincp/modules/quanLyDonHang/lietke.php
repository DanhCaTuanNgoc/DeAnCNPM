<?php
	$sql_lietke_dh= "SELECT * FROM tbl_giohang,tbl_dangky WHERE tbl_giohang.id_khachhang = tbl_dangky.id_dangky ORDER BY tbl_giohang.id_gh DESC ";
	$lietke_dh= mysqli_query($mysqli,$sql_lietke_dh);
?>
<h3>Liệt Kê Don Hang</h3>
<table style="width: 100%; border-collapse: collapse;" border="1" >
	<tr>
		<th>Id</th>
 		<th>Ma Gio Hang</th>
 		<th>Ten Khach Hang</th>
 		<th>Dia chi</th>
 		<th>Email</th>
 		<th>SDT</th>
 		<th>Trang thai</th>
		<th>Ngay dat</th>
 		<th>Quan ly</th>
		<th>In Don Hang</th>
 	</tr>
 	<?php
 	$i = 0;
 	while ($row = mysqli_fetch_array($lietke_dh)) {
 		$i ++;
 	?>
  	<tr>
  		<td> <?php echo $i ?></td>
  		<td> <?php echo $row['ma_gh'] ?></td>
  		<td> <?php echo $row['ten_khachhang'] ?></td>
  		<td> <?php echo $row['dia_chi'] ?></td>
  		<td> <?php echo $row['email'] ?></td>
  		<td> <?php echo $row['dien_thoai'] ?></td>
  		<td>
  			<?php 
  			if($row['trang_thai']==1){
  				echo '<a href="modules/quanLyDonHang/xuLy.php?code='.$row['ma_gh'].'">Don hang moi</a>'; 
  			}else{
  				echo 'Da Xu Ly';
  			}

  			 ?>
  		</td>
		<td><?php echo $row['cart_date'] ?></td>
  		<td>
  			<a href="index.php?action=donHang&query=xemDonHang&code=<?php echo $row['ma_gh'] ?>">Xem don hang</a>
  			<a href=""></a>
  		</td>
		<td>
			<a href="modules/quanLyDonHang/indonhang.php?&code=<?php echo $row['ma_gh'] ?>">In Đơn Hàng</a>
		</td>
  	</tr>
  	<?php
  	}	
  	?>
</table>
 