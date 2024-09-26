<?php
$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc = '$_GET[id]' ORDER BY tbl_sanpham.idSanPham DESC";
$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc = '$_GET[id]' ORDER BY tbl_danhmuc.id_danhmuc DESC";
$query_cate = mysqli_query($mysqli, $sql_cate);
$query_pro = mysqli_query($mysqli, $sql_pro);
if ($query_cate) {
    $row_title = mysqli_fetch_array($query_cate);
}
?>
<?php
include("./pages/sidebar/sidebar.php");
?>
<div class="main_content">
    <div class="cate_title">
        <h2><?php echo $row_title['tendanhmuc'] ?></h2>
    </div>
    <ul class="product_list">
        <?php
        // $row = mysqli_fetch_array($query_pro);
        // if (mysqli_fetch_array($query_pro) > 0) {
        $count = 0;
        while ($row_pro = mysqli_fetch_array($query_pro)) {
            $count++;
        ?>
            <li>
                <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['idSanPham'] ?>">
                    <img src="admincp/modules/quanLySanPham/uploads/<?php echo $row_pro['hinhAnh'] ?>">
                    <p class="title_product"><?php echo $row_pro['tenSanPham'] ?></p>
                    <p class="price_product"><?php echo number_format($row_pro['giaSanPham'], 0, ',', ',') . 'vnđ' ?></p>
                </a>
            </li>
        <?php }
        if ($count == 0) {
        ?>
            <div>KO CÓ SẢN PHẨM</div>
        <?php  }
        ?>
    </ul>
</div>