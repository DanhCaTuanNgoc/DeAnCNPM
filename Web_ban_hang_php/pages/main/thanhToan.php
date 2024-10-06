<?php 
  session_start();
  include('../../admincp/config/config.php');
  require('../../mail/sendmail.php');
    
    $id_khachhang = $_SESSION['id_khachhang'];
    $ma_gh = rand(0,9999);
    $insert_cart = "INSERT INTO tbl_giohang(id_khachhang,ma_gh,trang_thai) VALUE('".$id_khachhang."','".$ma_gh."',1)";
      $cart_query = mysqli_query($mysqli,$insert_cart);
      if($cart_query){
        // add gio hang chi tiet
        foreach($_SESSION['cart'] as $key => $value){
          $id_sp = $value['id'];
          $so_luong = $value['so_luong'];
          $thanhtien = $so_luong * $value['gia_sp']; 
          $tong_tien += $thanhtien; 
          $insert_order_details= "INSERT INTO tbl_chitiet_gh(ma_gh,id_sp,so_luong_mua) VALUE('".$ma_gh."','".$id_sp."','".$so_luong."')";
          mysqli_query($mysqli,$insert_order_details);
        }
        $tieude = "Đặt hàng website 7tcc.com.vn thành công!";
        $noidung = "<p>Cảm ơn quý khách đã đặt hàng với mã đơn hàng : ".$ma_gh." </p>
                    <h4>Đơn đặt hàng bao gồm</h4>";
        foreach($_SESSION['cart'] as $key => $val){
          $noidung.="<ul style = 'border: 1px solid blue; margin: 10px;'>
                      <li><span>Tên sản phẩm: </span>".$val['ten_sp']."</li>
                      <li><span>Mã sản phẩm: </span>".$val['ma_sp']."</li>
                      <li><span>Giá: </span>".number_format($val['gia_sp'],0,',',',')."</li>
                      <li><span>Số lượng: </span>".$val['so_luong']."</li>                     
          </ul>";
        }
        $noidung .= "<h4>Tổng tiền đơn hàng: ".number_format($tong_tien, 0, ',', '.')." VND</h4>";
        $maildathang = $_SESSION['email'];
        $mail = new Mailer();
        $mail ->dathang($tieude,$noidung,$maildathang);
      }
      unset($_SESSION['cart']);
      header('Location:../../index.php?quanly=camMon');

?>