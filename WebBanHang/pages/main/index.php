<?php
$sql_pro = "SELECT * FROM tbl_sanpham LIMIT 2";
$new_pro = mysqli_query($mysqli, $sql_pro);
?>
<?php
include("./pages/sidebar/sidebar.php");
?>
<div class="main_content">
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
</div>