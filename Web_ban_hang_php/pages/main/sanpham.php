<?php
$sql_pro_info = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_sp = '$_GET[id]' LIMIT 1";
$pro_info = mysqli_query($mysqli, $sql_pro_info);
?>
<div class="main_content">
    <?php
    while ($info = mysqli_fetch_array($pro_info)) {
    ?>
        <form class="product_content" method="POST" action="/pages/main/themgiohang.php?idsanpham=<?php echo $info['id_sp'] ?>">
            <div class="product_img">
                <img class="img" src="admincp/modules/quanLySanPham/uploads/<?php echo $info['hinh_anh'] ?>" alt="">
            </div>
            <div class="product_detail">
                <p class="ten_sp"><?php echo $info['ten_sp'] ?></p>
                <?php
                if ($info['so_luong'] > 0) {
                ?>
                    <p class="quantity">Tình trạng : <span style="color : red; font-weight : 500;">Còn hàng</span></p>
                <?php } else { ?>
                    <p class="quantity">Tình trạng : <span style="color : red; font-weight : 500;">Hết hàng</span></p>
                <?php } ?>
                <p class="gia_sp"><?php echo number_format($info['gia_sp'], 0, ',', ',') . 'đ' ?></p>

                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <tr>
                            <td><strong>Tên sản phẩm</strong></td>
                            <td><em><?php echo $info['ten_sp'] ?></em></td>
                        </tr>
                        <tr>
                            <td><strong>Danh mục</strong></td>
                            <td><em>ai biet</em></td>
                        </tr>
                        <tr>
                            <td><strong>Thương hiệu</strong></td>
                            <td><em>ai biet</em></td>
                        </tr>
                        <tr>
                            <td><strong>Xuất xứ</strong></td>
                            <td><em>ai biet</em></td>
                        </tr>
                    </tbody>
                </table>
                <div class="soluong">
                    <label for="" style="color : #55595C; font-size : 16px;">Số lượng</label>
                    <div style="display : block">
                        <button id="tang" class="soluong_btn">
                            +
                        </button>
                        <input class="soluong_input" id="soluong_input" name="so_luong" type="number" value="1">
                        <button id="giam" class="soluong_btn">
                            -
                        </button>
                    </div>
                </div>
                <input class="mua_btn" type="submit" name="themgiohang" value="Thêm giỏ hàng">
            </div>
        </form>
        <div class="tabs">
            <ul id="tabs-nav">
                <li><a href="#chitiet">Tóm tắt sản phẩm</a></li>
                <li><a href="#noidung">Nội dung sản phẩm</a></li>
            </ul>
            <div id="tabs-content">
                <div id="chitiet" class="tab-content">
                    <?php echo $info['tom_tat'] ?>
                </div>
                <div id="noidung" class="tab-content">
                    <?php echo $info['noi_dung'] ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>