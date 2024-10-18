<div class="content_wrapper">
    <?php
    // Include database configuration to initialize $mysqli
    include(dirname(__FILE__) . "/../../admincp/config/config.php");
    include("./pages/sidebar/sidebar.php");

    // Handle form data and sanitize inputs
    $ten_sp_filter = isset($_GET['ten_sp']) ? $_GET['ten_sp'] : '';
    $danhmuc_filter = isset($_GET['danhmuc']) ? $_GET['danhmuc'] : '';
    $gia_min_filter = isset($_GET['gia_min']) ? $_GET['gia_min'] : '';
    $gia_max_filter = isset($_GET['gia_max']) ? $_GET['gia_max'] : '';
    $tinh_trang_filter = isset($_GET['tinhtrang']) ? $_GET['tinhtrang'] : '';

    // Construct query based on filters
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE 1";

    if ($ten_sp_filter) {
        $sql_pro .= " AND ten_sp LIKE '%" . mysqli_real_escape_string($mysqli, $ten_sp_filter) . "%'";
    }

    if ($danhmuc_filter) {
        $sql_pro .= " AND id_dm = " . intval($danhmuc_filter);
    }

    if ($gia_min_filter && $gia_max_filter) {
        $sql_pro .= " AND gia_sp BETWEEN " . intval($gia_min_filter) . " AND " . intval($gia_max_filter);
    } elseif ($gia_min_filter) {
        $sql_pro .= " AND gia_sp >= " . intval($gia_min_filter);
    } elseif ($gia_max_filter) {
        $sql_pro .= " AND gia_sp <= " . intval($gia_max_filter);
    }

    if ($tinh_trang_filter !== '') {
        $sql_pro .= " AND tinh_trang = " . intval($tinh_trang_filter);
    }

    $query_pro = mysqli_query($mysqli, $sql_pro);
    ?>
    
    <div class="main_content">
        <h3>Kết quả tìm kiếm</h3>
        <ul class="product_list">
            <?php
            while ($row = mysqli_fetch_array($query_pro)) {
            ?>
                <li>
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sp'] ?>">
                        <img src="admincp/modules/quanLySanPham/uploads/<?php echo $row['hinh_anh'] ?>" alt="<?php echo $row['ten_sp'] ?>" style="width: 200px; height: 200px;">
                        <p class="title_product"><?php echo $row['ten_sp'] ?></p>
                        <p class="price_product"><?php echo number_format($row['gia_sp'], 0, ',', '.') . ' đ ' ?></p>
                    </a>
                </li>
            <?php
            } ?>
        </ul>
    </div>
</div>

<!-- CSS for styling layout and product display -->
<style>
    .content_wrapper {
        display: flex;
        margin-top: 20px;
    }

    .sidebar {
        flex: 1;
        max-width: 250px;
        background-color: #f5f5f5;
        padding: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        height: auto;
    }

    .main_content {
        flex: 3;
        padding-left: 20px;
    }

    .product_list {
        list-style: none;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
    }

    .product_list li {
        margin-right: 20px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        padding: 10px;
        width: 220px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease;
    }

    .product_list li:hover {
        transform: scale(1.05);
    }

    .product_list li img {
        max-width: 100%;
        height: auto;
    }

    .title_product {
        font-size: 18px;
        font-weight: bold;
        margin: 10px 0;
    }

    .price_product {
        color: red;
        font-size: 16px;
    }
</style>
