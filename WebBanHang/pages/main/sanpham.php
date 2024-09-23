<?php
$sql_pro_info = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.idSanPham = '$_GET[id]' LIMIT 1";
$pro_info = mysqli_query($mysqli, $sql_pro_info);
?>
<div class="main_content">
    <?php
    while ($info = mysqli_fetch_array($pro_info)) {
    ?>
        <form method="POST" action="/WebBanHang/pages/main/themgiohang.php?idsanpham=<?php echo $info['idSanPham'] ?>">
            <div class="product_img">
                <img src="admincp/modules/quanLySanPham/uploads/<?php echo $info['hinhAnh'] ?>" alt="">
            </div>
            <div class="product_detail">
                <h3>Tên sản phẩm : <?php echo $info['tenSanPham'] ?></h3>
                <p>Giá : <?php echo number_format($info['giaSanPham'], 0, ',', '.') . 'đ' ?></p>
                <p><input type="submit" name="themgiohang" value="Thêm giỏ hàng"></p>
            </div>
        </form>
    <?php } ?>
</div>