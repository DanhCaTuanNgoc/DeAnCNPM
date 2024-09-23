<?php
$sql_lietke = "SELECT * FROM tbl_sanpham ORDER BY idSanPham DESC";
$lietke = mysqli_query($mysqli, $sql_lietke);
// WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc
$sql_dm = "SELECT * FROM tbl_danhmuc, tbl_sanpham WHERE tbl_danhmuc.id_danhmuc = tbl_sanpham.id_danhmuc";
$dm = mysqli_query($mysqli, $sql_dm);
?>
<h3>Liệt Kê Sản Phẩm</h3>
<table style="width: 100%; border-collapse: collapse;" border="1">
    <tr>
        <th>Id</th>
        <th>Mã sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá</th>
        <th>Danh mục</th>
        <th>Tóm tắt</th>
        <th>Nội dung</th>
        <th>Trạng thái</th>
        <th>Quản lý</th>
    </tr>
    <?php
    $i = 0;
    $row_dm = mysqli_fetch_array($dm);
    while ($row = mysqli_fetch_array($lietke)) {
        $i++;
    ?>
        <tr>
            <td> <?php echo $i ?></td>
            <td> <?php echo $row['maSanPham'] ?></td>
            <td><img src="modules/quanLySanPham/uploads/<?php echo $row['hinhAnh'] ?>" width='150px'></td>
            <td> <?php echo $row['tenSanPham'] ?></td>
            <td> <?php echo $row['soLuong'] ?></td>
            <td> <?php echo $row['giaSanPham'] ?> vnd</td>
            <td> <?php echo $row_dm['tendanhmuc'] ?></td>
            <td> <?php echo $row['tomTat'] ?></td>
            <td> <?php echo $row['noiDung'] ?></td>
            <td> <?php
                    if ($row['tinhTrang'] == 1) {
                        echo 'Kích hoạt';
                    } else {
                        echo 'Ẩn';
                    }
                    ?>
            </td>
            <td>
                <a href="modules/quanLySanPham/xuly.php?idsp=<?php echo $row['idSanPham'] ?>">Xóa</a>

                |
                <a href="?action=quanLySanPham&query=sua&idsp=<?php echo $row['maSanPham'] ?>">Sửa</a>

            </td>
        </tr>
    <?php
    }
    ?>
</table>