<?php 
	session_start();
?>
<h3>Gio hang</h3>
  <table style="width: 100%; text-align: center; border-collapse: collapse;" border="1">
  <tr>
    <th>Id</th>
    <th>Ma SP</th>
    <th>Ten san pham</th>
    <th>Hinh anh</th>
    <th>So luong</th>
    <th>Gia san pham</th>
    <th>Thanh Tien</th>
    <th>Quan Ly</th>
  </tr>
  <?php
  if(isset($_SESSION['cart'])){
  	$i=0;
  	$tongtien=0;
  	foreach($_SESSION['cart'] as $cart_item){
  		$thanhtien= $cart_item['so_luong']*$cart_item['gia_sp'];
  		$tongtien+=$thanhtien;
  		$i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['ma_sp']  ?></td>
    <td><?php echo $cart_item['ten_sp']  ?></td>
    <td><img src="admincp/modules/quanLySanPham/uploads/<?php echo $cart_item['hinh_anh'];?>"width="150px"></td>
    <td>
    	<a href="pages/main/themGioHang.php?cong=<?php echo $cart_item['id']?>"><i class="fa-solid fa-plus"></i></a>
    	<?php echo $cart_item['so_luong'] ?>
    	<a href="pages/main/themGioHang.php?tru=<?php echo $cart_item['id']?>"><i class="fa-solid fa-minus"></i></a>	
    	</td>
    <td><?php echo number_format($cart_item['gia_sp'],0,',','.').' VND ' ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').' VND ' ?></td>
    <td><a href="pages/main/themGioHang.php?xoa=<?php echo $cart_item['id']?>">Xoa</a></td>
  </tr>
	<?php 
	}
	?>
	<tr>
		<td colspan="8">
			<p style="float: left;">Tong tien : <?php echo number_format($tongtien,0,',','.').' VND ' ?></p>
			<p style="float: right;"><a href="pages/main/themGioHang.php?xoatatca=1">Xoa tat ca</a></p>
		</td>
	</tr>
	<?php 
	}else{
	?>
	<tr>
		<td colspan="8"><p>Hien tai khong co san pham</p></td>
	</tr>
	<?php 
	} ?>
</table> 