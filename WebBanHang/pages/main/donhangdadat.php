<div class="main_content">
<p>Đơn hàng đã đặt</p>
<div class="container">	
<div class="wrapper-2">
    <div class="arrow-steps clearfix">
        <div class="step done"> <span> <a href="index.php?quanly=gioHang"> Giỏ hàng</a></span> </div>
        <div class="step done"> <span><a href="index.php?quanly=vanChuyen"> Vận chuyển</a></span> </div>
        <div class="step done"> <span><a href="index.php?quanly=thongTinThanhToan">Thanh toán</a></span> </div>
        <div class="step current"> <span><a href="index.php?quanly=donHangDaDat">Lịch sử đơn hàng</a></span> </div>
    </div>
</div>
</div>

<h4 style="text-align:center;">LỊCH SỬ ĐƠN HÀNG</h4>
<?php
        if (!isset($_SESSION['id_khachhang'])) {
            // Nếu khách hàng chưa đăng nhập
            echo '<h4>Bạn chưa đăng nhập, không thể xem giỏ hàng.</h4>';
            echo '<a href="index.php?quanly=dangnhap">Đăng nhập ngay</a>';
            exit; // Ngừng thực thi mã bên dưới
        }
        ?>
</div>
