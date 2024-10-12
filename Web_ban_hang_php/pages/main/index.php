<?php
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmucqa WHERE tbl_sanpham.id_dm=tbl_danhmucqa.id_dm ORDER BY tbl_sanpham.id_sp DESC LIMIT 25";
if (isset($_GET['trang'])) {
    $page = $_GET['trang'];
} else {
    $page = '';
}
if ($page == '' || $page == 1) {
    $begin = 0;
} else {
    $begin = ($page * 8) - 8;
}
$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmucqa WHERE tbl_sanpham.id_dm=tbl_danhmucqa.id_dm ORDER BY tbl_sanpham.id_sp DESC LIMIT $begin,8";
$new_pro = mysqli_query($mysqli, $sql_pro);
?>
<div class="main_with_sidebar">
    <?php
    include("./pages/sidebar/sidebar.php");
    ?>
    <div class="main_content_with_sidebar">
        <div class="cate_title">
            <h2>Sản phẩm mới nhất</h2>
        </div>
        <ul class="product_list">
            <?php
            while ($row = mysqli_fetch_array($new_pro)) {
            ?>
                <li>
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sp'] ?>">
                        <img src="admincp/modules/quanLySanPham/uploads/<?php echo $row['hinh_anh'] ?>">
                        <p class="title_product"><?php echo $row['ten_sp'] ?></p>
                        <p class="price_product"><?php echo number_format($row['gia_sp'], 0, ',', ',') . 'vnđ' ?></p>
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
        <div style="clear:both;"></div>
        <?php
        $sql_page = mysqli_query($mysqli, "SELECT * FROM tbl_sanpham");
        $row_count = mysqli_num_rows($sql_page);
        $trang = ceil($row_count / 3);
        ?>
        <ul style="display: flex; flex-direction : row; width : 100%; justify-content : center">
            <?php
            for ($i = 1; $i < $trang; $i++) {
            ?>
                <div class="phantrang">
                    <div <?php if ($i == $page) {
                                echo 'style="background: #FFFFFF;"';
                            } else {
                                echo '';
                            } ?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></div>
                </div>
            <?php
            }
            ?>
    </div>
</div>