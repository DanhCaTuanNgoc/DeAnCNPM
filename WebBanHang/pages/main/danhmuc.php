<?php $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_dm = '$_GET[id]' ORDER BY tbl_sanpham.id_sp DESC";
$sql_cate = "SELECT * FROM tbl_danhmucqa WHERE tbl_danhmucqa.id_dm = '$_GET[id]' ORDER BY tbl_danhmucqa.id_dm DESC";
$query_cate = mysqli_query($mysqli, $sql_cate);
$query_pro = mysqli_query($mysqli, $sql_pro);
if ($query_cate) {
    $row_title = mysqli_fetch_array($query_cate);
}
?>
<div class="main_with_sidebar" >
    <?php
    include("./pages/sidebar/sidebar.php");
    ?>
    <div class="main_content main_content_with_sidebar">
        <div class="cate_title">
            <h2><?php echo $row_title['name_sp'] ?></h2>
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
                    <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sp'] ?>">
                        <img src="admincp/modules/quanLySanPham/uploads/<?php echo $row_pro['hinh_anh'] ?>">
                        <p class="title_product"><?php echo $row_pro['ten_sp'] ?></p>
                        <p class="price_product"><?php echo number_format($row_pro['gia_sp'], 0, ',', ',') . 'vnđ' ?></p>
                    </a>
                </li>
            <?php }
            if ($count == 0) {
            ?>
                <div class="kosanpham">Không có sản phẩm</div>
            <?php  }
            ?>
        </ul>
    </div>
</div>