<div class="main_content">
<p>Thông tin thanh toán</p>

    <div class="wrapper-2">
        <div class="arrow-steps clearfix">
            <div class="step done"> <span> <a href="index.php?quanly=giohang"> Giỏ hàng</a></span> </div>
            <div class="step done"> <span><a href="index.php?quanly=vanChuyen"> Vận chuyển</a></span> </div>
            <div class="step current"> <span><a href="index.php?quanly=thongTinThanhToan">Thanh toán</a></span> </div>
            <div class="step "> <span><a href="index.php?quanly=donHangDaDat">Lịch sử đơn hàng</a></span> </div>
        </div>
    </div>
    <form action="pages/main/thanhtoan.php" method="POST">
        <div class="row">
            <?php
            $id_dangky = $_SESSION['id_khachhang'];
            $sql_get_vanchuyen = mysqli_query($mysqli, "SELECT * FROM tbl_giaohang WHERE id_dangky='$id_dangky' LIMIT 1");
            $count = mysqli_num_rows($sql_get_vanchuyen);
            if ($count > 0) {
                $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
                $name = $row_get_vanchuyen['name'];
                $phone = $row_get_vanchuyen['phone'];
                $address = $row_get_vanchuyen['address'];
                $note = $row_get_vanchuyen['note'];
            } else {
                $name = '';
                $phone = '';
                $address = '';
                $note = '';
            }
            ?>
            <div class="col-md-8" style="float:left;width: 680px;">
                <h4>THÔNG TIN VẬN CHUYỂN VÀ GIỎ HÀNG</h4>
                <ul>
                    <li>Họ và tên: <b><?php echo $name ?></b></li>
                    <li>Số điện thoại: <b><?php echo $phone ?></b></li>
                    <li>Địa chỉ: <b><?php echo $address ?></b></li>
                    <li>Note: <b><?php echo $note ?></b></li>
                </ul>

                <table style="width: 100%; text-align: center; border-collapse: collapse;" border="1">
                    <tr>
                        <th>Id</th>
                        <th>Ma SP</th>
                        <th>Ten san pham</th>
                        <th>Hinh anh</th>
                        <th>So luong</th>
                        <th>Gia san pham</th>
                        <th>Thanh Tien</th>
                    </tr>

                    <?php
                    if (isset($_SESSION['cart'])) {
                        $i = 0;
                        $tongtien = 0;
                        foreach ($_SESSION['cart'] as $cart_item) {
                            $thanhtien = $cart_item['so_luong'] * $cart_item['gia_sp'];
                            $tongtien += $thanhtien;
                            $i++;
                    ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $cart_item['ma_sp']  ?></td>
                                <td><?php echo $cart_item['ten_sp']  ?></td>
                                <td><img src="admincp/modules/quanLySanPham/uploads/<?php echo $cart_item['hinh_anh']; ?>"
                                        width="150px"></td>
                                <td>
                                    <!-- <a href="pages/main/themGioHang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-plus"></i></a> -->
                                    <?php echo $cart_item['so_luong'] ?>
                                    <!-- <a href="pages/main/themGioHang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus"></i></a>   -->
                                </td>
                                <td><?php echo number_format($cart_item['gia_sp'], 0, ',', '.') . ' VND ' ?></td>
                                <td><?php echo number_format($thanhtien, 0, ',', '.') . ' VND ' ?></td>
                            </tr>
                        <?php
                        }
                        //$_SESSION['cart']['tong_tien'] = $tongtien;
                        ?>
                        <tr>
                            <td colspan="8">
                                <p style="float: left;">Tong tien : <?php echo number_format($tongtien, 0, ',', '.') . ' VND ' ?>
                                </p>
                                <div style="clear: both;"></div>
                            </td>
                        </tr>
                    <?php
                    } else {
                    ?>
                        <tr>
                            <td colspan="8">
                                <p>Hien tai khong co san pham</p>
                            </td>
                        </tr>
                    <?php
                    } ?>
                </table>

            </div>
            <div class="col-md-4" style="float:left;margin-left:10px;">
                <h4> PHƯƠNG THỨC THANH TOÁN</h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="tienmat" id="radios1" checked>
                    <img style="width: 32px; height:32px" src="images/cash.jpg">
                    <label class="form-check-label" for="radios1">
                        Tiền mặt
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="chuyenkhoan" id="radios2">
                    <img style="width: 32px; height:32px" src="images/banking.png">
                    <label class="form-check-label" for="radios2">
                        Chuyển khoản
                    </label>
                </div>
                <!-- <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" value="momo" id="radios3">
                <img style="width: 32px; height:32px" src="images/momo.png" >
                <label class="form-check-label" for="radios3">
                    Momo
                </label>
            </div> -->
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="vnpay" id="radios4">
                    <img style="width: 32px; height:32px" src="images/vnpay.png">
                    <label class="form-check-label" for="radios4">
                        VNPay
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="paypal" id="radios5">
                    <img style="width: 32px; height:32px" src="images/paypal.png">
                    <label class="form-check-label" for="radios5">
                        Paypal
                    </label>
                </div>
    </form>
    <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded "
        action="pages/main/xuLyThanhToanMomo.php" style="margin-bottom:5px">
        <input type="submit" name="momo" value="Thanh toán MOMO QRCode" class="btn btn-danger">
    </form>

    <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
        action="pages/main/xuLyThanhToanMomo_atm.php" style="margin-bottom:5px">
        <input type="submit" name="momo" value="Thanh toán MOMO ATM" class="btn btn-danger">
    </form>
    <input type="submit" value="Đặt hàng" name="thanhToan" class="btn btn-danger">
</div>
</div>

</div>


<!-- <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
    action="pages/main/xuLyThanhToanMomo.php">
    <input type="submit" name="momo" value="Thanh toán MOMO QRCode" class="btn btn-danger">
</form>

<form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
    action="pages/main/xuLyThanhToanMomo_atm.php">
    <input type="submit" name="momo" value="Thanh toán MOMO ATM" class="btn btn-danger">
</form> -->