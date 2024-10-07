<div class="main_content">
    <div class="cart_content">
        <div class="cart_header">
            <div class="cart_header_product">Sản phẩm</div>
            <div class="cart_header_item">Đơn giá</div>
            <div class="cart_header_item">Số lượng</div>
            <div class="cart_header_item">Số tiền</div>
            <div class="cart_header_item">Thao tác</div>
        </div>
        <?php
        $count = 0;
        if (isset($_SESSION['cart'])) {
            $tongtien = 0;
            foreach ($_SESSION['cart'] as $cart_item) {
                $count++;
                $thanhtien = $cart_item['gia_sp'] * $cart_item['so_luong'];
                $tongtien += $thanhtien;
        ?>
                <div class="cart_details">
                    <div class="detail_item">
                        <div class="name_img">
                            <img width="100px" height="100px" src="/admincp/modules/quanLySanPham/uploads/<?php echo $cart_item['hinh_anh'] ?>" alt="">
                            <p><?php echo $cart_item['ten_sp'] ?></p>
                        </div>
                        <div class="cart_header_item"><?php echo number_format($cart_item['gia_sp'], 0, ',', ',') . 'đ' ?></div>
                        <div class="cart_header_item cart_soluong">
                            <span style="font-size: 20px; font-weight : bold; margin-bottom : 4px ">
                                <a style="color : red;" href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">-</a>
                            </span>
                            <?php echo $cart_item['so_luong'] ?>
                            <span style="font-size: 18  px; font-weight : bold; margin-bottom : 4px ">
                                <a style="color : red;" href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>">+</a>
                            </span>
                        </div>
                        <div class="cart_header_item"><?php echo number_format($thanhtien, 0, ',', ',') . 'đ' ?></div>
                        <div class="cart_header_item">
                            <a style="color : red;" href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xóa</a>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
        <?php
        if ($count == 0) {
        ?>
            <img style="margin-top: 40px;" src="../images/emptycart.jpg" alt="EmtpyCart" width="200px" height="200px">
            <h4 style="font-style: italic; margin : 0 0 20px 0;">Giỏ hàng trống <a style="font-size: 13px; font-weight : 400; color : blue; text-decoration : underline;" href="index.php?">Mua sắm tại đây</a></h4>
        <?php } else { ?>
            <div class="cart_footer">
                <h3 style="margin-left : 50px; width : auto">Tổng tiền : <?php echo number_format($tongtien, 0, ',', ',') . 'đ' ?></h3>
                <a style="margin-right : 50px; color : red;" href="pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a>
            </div>
        <?php } ?>

        <?php
        if (isset($_SESSION['dang_ky']) && $count != 0) {
        ?>
            <div style=" display : flex; margin-top : 20px;">
                <a href="pages/main/thanhtoan.php" class="purchase_button">
                    Đặt hàng
                </a>
            </div>
        <?php
        } else {
        ?>
            <div style=" display : flex; margin-top : 20px;">
                <a href="index.php?quanly=dangky" class="purchase_button">
                    Đăng ký đặt hàng
                </a>
            </div>
        <?php
        }
        ?>

    </div>
</div>