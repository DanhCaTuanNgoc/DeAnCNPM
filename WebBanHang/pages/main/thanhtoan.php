<?php
session_start();
include('../../admincp/config/config.php');
require('../../mail/sendmail.php');
require('../../Carbon-3.8.0/autoload.php');
require_once('config_vnpay.php');

use Carbon\Carbon;
use Carbon\CarbonInterval;

$now = Carbon::now('Asia/Ho_Chi_Minh');
$id_khachhang = $_SESSION['id_khachhang'];
$ma_gh = rand(0, 9999);
$cart_payment = $_POST['payment'];
//lay id thong tin van chuyen
$id_dangky = $_SESSION['id_khachhang'];
$sql_get_vanchuyen = mysqli_query($mysqli, "SELECT * FROM tbl_giaohang WHERE id_dangky='$id_dangky' LIMIT 1");
$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
$id_shipping = $row_get_vanchuyen['id_shipping'];
$tong_tien = 0;

foreach ($_SESSION['cart'] as $key => $value) {
  $thanhtien = $value['so_luong'] * $value['gia_sp'];
  $tong_tien += $thanhtien;
}
if ($cart_payment == 'tienmat' || $cart_payment == 'chuyenkhoan') {
  //insert vao don hang
  $insert_cart = "INSERT INTO tbl_giohang(id_khachhang,ma_gh,trang_thai,cart_date,cart_payment,cart_shipping) VALUE('" . $id_khachhang . "','" . $ma_gh . "',1,'" . $now . "','" . $cart_payment . "','" . $id_shipping . "')";
  $cart_query = mysqli_query($mysqli, $insert_cart);
  // add gio hang chi tiet
  foreach ($_SESSION['cart'] as $key => $value) {
    $id_sp = $value['id'];
    $so_luong = $value['so_luong'];
    $insert_order_details = "INSERT INTO tbl_chitiet_gh(ma_gh,id_sp,so_luong_mua) VALUE('" . $ma_gh . "','" . $id_sp . "','" . $so_luong . "')";
    mysqli_query($mysqli, $insert_order_details);
  }
  unset($_SESSION['cart']);
  header('Location:../../index.php?quanly=camon');
} elseif ($cart_payment === 'vnpay') {
  //thanh toan vnpay
  $vnp_TxnRef = $ma_gh; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang vnpay
  $vnp_OrderInfo = 'Thanh toán đơn hàng';
  $vnp_OrderType = 'billpayment';
  $vnp_Amount = $tong_tien * 100;
  $vnp_Locale = 'vn';
  $vnp_BankCode = 'NCB';
  $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
  //Add Params of 2.0.1 Version
  $vnp_ExpireDate = $expire;

  $inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => $vnp_OrderInfo,
    "vnp_OrderType" => $vnp_OrderType,
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef,
    "vnp_ExpireDate" => $vnp_ExpireDate

  );

  if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
  }
  // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
  //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
  // }

  //var_dump($inputData);
  ksort($inputData);
  $query = "";
  $i = 0;
  $hashdata = "";
  foreach ($inputData as $key => $value) {
    if ($i == 1) {
      $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
      $hashdata .= urlencode($key) . "=" . urlencode($value);
      $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
  }

  $vnp_Url = $vnp_Url . "?" . $query;
  if (isset($vnp_HashSecret)) {
    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
  }
  $returnData = array(
    'code' => '00',
    'message' => 'success',
    'data' => $vnp_Url
  );
  if (isset($_POST['thanhToan'])) {
    $insert_cart = "INSERT INTO tbl_giohang(id_khachhang,ma_gh,trang_thai,cart_date) VALUE('" . $id_khachhang . "','" . $ma_gh . "',1,'" . $now . "')";
    $cart_query = mysqli_query($mysqli, $insert_cart);
    // add gio hang chi tiet
    foreach ($_SESSION['cart'] as $key => $value) {
      $id_sp = $value['id'];
      $so_luong = $value['so_luong'];
      $thanhtien = $so_luong * $value['gia_sp'];
      $tong_tien += $thanhtien;
      $insert_order_details = "INSERT INTO tbl_chitiet_gh(ma_gh,id_sp,so_luong_mua) VALUE('" . $ma_gh . "','" . $id_sp . "','" . $so_luong . "')";
      mysqli_query($mysqli, $insert_order_details);
    }
    unset($_SESSION['cart']);
    $_SESSION['code_cart'] = $ma_gh;
    echo '!!!';
    header('Location: ' . $vnp_Url);
    die();
  } else {
    echo json_encode($returnData);
  }
} 


        // ui lòng tham khảo thêm tại code demo


// if ($cart_query) {
//   // add gio hang chi tiet
//   foreach ($_SESSION['cart'] as $key => $value) {
//     $id_sp = $value['id'];
//     $so_luong = $value['so_luong'];
//     $thanhtien = $so_luong * $value['gia_sp'];
//     $tong_tien += $thanhtien;
//     $insert_order_details = "INSERT INTO tbl_chitiet_gh(ma_gh,id_sp,so_luong_mua) VALUE('" . $ma_gh . "','" . $id_sp . "','" . $so_luong . "')";
//     mysqli_query($mysqli, $insert_order_details);
//   }
//   $tieude = "Đặt hàng website 7tcc.com.vn thành công!";
//   $noidung = "<p>Cảm ơn quý khách đã đặt hàng với mã đơn hàng : " . $ma_gh . " </p>
//                     <h4>Đơn đặt hàng bao gồm</h4>";
//   foreach ($_SESSION['cart'] as $key => $val) {
//     $noidung .= "<ul style = 'border: 1px solid blue; margin: 10px;'>
//                       <li><span>Tên sản phẩm: </span>" . $val['ten_sp'] . "</li>
//                       <li><span>Mã sản phẩm: </span>" . $val['ma_sp'] . "</li>
//                       <li><span>Giá: </span>" . number_format($val['gia_sp'], 0, ',', ',') . "</li>
//                       <li><span>Số lượng: </span>" . $val['so_luong'] . "</li>                     
//           </ul>";
//   }
//   $noidung .= "<h4>Tổng tiền đơn hàng: " . number_format($tong_tien, 0, ',', '.') . " VND</h4>";
//   $maildathang = $_SESSION['email'];
//   $mail = new Mailer();
//   $mail->dathang($tieude, $noidung, $maildathang);
// }
// unset($_SESSION['cart']);
// header('Location:../../index.php?quanly=camon')