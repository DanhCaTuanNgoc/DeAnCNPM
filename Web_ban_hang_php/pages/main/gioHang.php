<p>Giỏ hàng

    <br>
    <?php 
  if(isset($_SESSION['dang_ky'])){
    echo 'Xin Chào: '.'<span style="color : red">'.$_SESSION['dang_ky'].'</span>';
  }
  ?>
</p>


<div class="wrapper-2">
    <div class="arrow-steps clearfix">
        <div class="step current"> <span> <a href="index.php?quanly=gioHang"> Giỏ hàng</a></span> </div>
        <div class="step"> <span><a href="index.php?quanly=vanChuyen"> Vận chuyển</a></span> </div>
        <div class="step"> <span><a href="index.php?quanly=thongTinThanhToan">Thanh toán</a></span> </div>
        <div class="step"> <span><a href="index.php?quanly=donHangDaDat">Lịch sử đơn hàng</a></span> </div>
    </div>
</div>

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
        <td><img src="admincp/modules/quanLySanPham/uploads/<?php echo $cart_item['hinh_anh'];?>" width="150px"></td>
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
  //$_SESSION['cart']['tong_tien'] = $tongtien;
  ?>
    <tr>
        <td colspan="8">
            <p style="float: left;">Tong tien : <?php echo number_format($tongtien,0,',','.').' VND ' ?></p>
            <p style="float: right;"><a href="pages/main/themGioHang.php?xoatatca=1">Xoa tat ca</a></p>
            <div style="clear: both;"></div>
            <?php  
      if(isset($_SESSION['dang_ky'])){
      ?>
            <p><a href="index.php?quanly=vanChuyen">Hình thức vận chuyển</a></p>
            <?php 
      }else{
      ?>
            <p><a href="index.php?quanly=dangKy">Đăng Ký Đặt Hàng</a></p>
            <?php 
      }
      ?>
        </td>
    </tr>
    <?php 
  }else{
  ?>
    <tr>
        <td colspan="8">
            <p>Hien tai khong co san pham</p>
        </td>
    </tr>
    <?php 
  } ?>
</table>