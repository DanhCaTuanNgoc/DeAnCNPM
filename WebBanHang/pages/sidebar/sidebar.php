<?php
// Bao gồm file cấu hình cơ sở dữ liệu
include(dirname(__FILE__) . "/../../admincp/config/config.php");

// Xử lý dữ liệu lọc đầu vào từ người dùng
$danhmuc_filter = filter_input(INPUT_GET, 'danhmuc', FILTER_SANITIZE_NUMBER_INT);
$gia_min_filter = filter_input(INPUT_GET, 'gia_min', FILTER_SANITIZE_NUMBER_INT);
$gia_max_filter = filter_input(INPUT_GET, 'gia_max', FILTER_SANITIZE_NUMBER_INT);
$tinh_trang_filter = filter_input(INPUT_GET, 'tinhtrang', FILTER_SANITIZE_SPECIAL_CHARS);
$ten_sp_filter = filter_input(INPUT_GET, 'ten_sp', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lọc sản phẩm</title>
    <style>
        .sidebar {
            width: 300px;
            padding: 15px;
            background-color: #f7f7f7;
            border: 1px solid #ddd;
        }

        .filter_content {
            margin-bottom: 20px;
        }

        .filter_title .title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .filter_content div {
            margin-bottom: 10px;
        }

        .filter_content label {
            display: block;
            margin-bottom: 5px;
        }

        .filter_content input,
        .filter_content select {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
        }

        .filter_content button {
            background-color: #dc0021;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            cursor: pointer;
        }

        .filter_content button:hover {
            background-color: #c9302c;
        }
    </style>
</head>

<body>
<div class="sidebar">
    <div class="filter_content">
        <div class="filter_title">
            <p class="title">Bộ lọc sản phẩm</p>
            <p style="margin: 4px 0px;">Lọc nhanh sản phẩm tìm kiếm</p>
        </div>
        <!-- Form submission via GET method -->
        <form method="GET" action="index.php" id="filterForm">
            <input type="hidden" name="quanly" value="timKiemNangCao"> <!-- Hidden field to ensure 'quanly=timKiemNangCao' is passed -->

            <div>
                <label for="danhmuc">Danh mục:</label>
                <select name="danhmuc">
                    <option value="">Chọn danh mục</option>
                    <?php
                    $sql_cate = "SELECT * FROM tbl_danhmucqa ORDER BY id_dm DESC";
                    $cate = mysqli_query($mysqli, $sql_cate);
                    while ($dm = mysqli_fetch_array($cate)) {
                        echo "<option value='" . $dm['id_dm'] . "'" . ($danhmuc_filter == $dm['id_dm'] ? ' selected' : '') . ">" . htmlspecialchars($dm['name_sp']) . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div>
                <label for="gia_min">Giá từ:</label>
                <input type="number" name="gia_min" placeholder="Giá thấp nhất" value="<?php echo htmlspecialchars($gia_min_filter); ?>">
                <label for="gia_max">đến</label>
                <input type="number" name="gia_max" placeholder="Giá cao nhất" value="<?php echo htmlspecialchars($gia_max_filter); ?>">
            </div>

            <div>
                <label for="tinhtrang">Tình trạng:</label>
                <select name="tinhtrang">
                    <option value="">Tất cả</option>
                    <option value="1" <?php echo ($tinh_trang_filter == '1' ? 'selected' : ''); ?>>Còn hàng</option>
                    <option value="0" <?php echo ($tinh_trang_filter == '0' ? 'selected' : ''); ?>>Hết hàng</option>
                </select>
            </div>

            <div>
                <label for="ten_sp">Tên sản phẩm:</label>
                <input type="text" name="ten_sp" placeholder="Tìm kiếm sản phẩm" value="<?php echo htmlspecialchars($ten_sp_filter); ?>">
            </div>

            <button type="submit">Lọc</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('#filterForm');
        
        form.addEventListener('submit', function (event) {
            // Ngăn gửi form mặc định
            event.preventDefault();

            // Tạo một URLSearchParams để chứa các tham số gửi đi
            const params = new URLSearchParams(new FormData(form));

            // Loại bỏ các tham số có giá trị rỗng
            for (let [key, value] of params.entries()) {
                if (!value.trim()) {
                    params.delete(key);
                }
            }

            // Tạo URL mới
            const newURL = `${form.action}?${params.toString()}`;

            // Điều hướng tới URL mới
            window.location.href = newURL;
        });
    });
</script>

</body>

</html>
