<?php
$sql_lietke = "SELECT * FROM tbl_danhmuc ORDER BY thutu ";
$lietke = mysqli_query($mysqli, $sql_lietke);
?>
<div class="menu">
    <div class="menu_content">
        <div class="menu_items">
            <a class="item" href="index.php">Trang chủ<span class="arrow_menu"><img src="/WebBanHang/images/arrow-icon.svg" alt="arrow"></span></a>
        </div>
        <?php
        while ($row_danhmuc = mysqli_fetch_array($lietke)) {
        ?>
            <div class="menu_items">
                <a class="item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?><span class="arrow_menu"><img src="/WebBanHang/images/arrow-icon.svg" alt="arrow"></span></a>
            </div>
        <?php } ?>
        <div class="menu_items">
            <a class="item" href="index.php?quanly=giohang">Giỏ hàng<span class="arrow_menu"><img src="/WebBanHang/images/arrow-icon.svg" alt="arrow"></span></a>
        </div>
        <div class="menu_items">
            <a class="item" href="index.php?quanly=tintuc">Tin tức<span class="arrow_menu"><img src="/WebBanHang/images/arrow-icon.svg" alt="arrow"></span></a>
        </div>
        <div class="menu_items">
            <a class="item" href="index.php?quanly=lienhe">Liên hệ<span class="arrow_menu"><img src="/WebBanHang/images/arrow-icon.svg" alt="arrow"></span></a>
        </div>
    </div>
</div>