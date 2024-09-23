<?php
$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE maSanPham='$_GET[idsp]' LIMIT 1";
$sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>
<h3>Sua San Pham</h3>
<table border="1px" width="100%" style="border-collapse: collapse;">
    <?php
    while ($row = mysqli_fetch_array($sua_sp)) {
    ?>
        <form method="POST" action="modules/quanLySanPham/xuly.php?idsp=<?php echo $row['maSanPham'] ?>" enctype="multipart/form-data">
            <tr>
                <td>Ten San Pham</td>
                <td><input type="text" value="<?php echo $row['tenSanPham'] ?>" name="tenSanPham"></td>
            </tr>
            <tr>
                <td>Ma San Pham</td>
                <td><input type="text" value="<?php echo $row['maSanPham'] ?>" name="maSanPham"></td>
            </tr>
            <tr>
                <td>Gia San Pham</td>
                <td><input type="text" value="<?php echo $row['giaSanPham'] ?>" name="giaSanPham"></td>
            </tr>
            <tr>
                <td>So luong</td>
                <td><input type="text" value="<?php echo $row['soLuong'] ?>" name="soLuong"></td>
            </tr>
            <tr>
                <td>Hinh anh</td>
                <td><input type="file" name="hinhAnh">
                    <img src="modules/quanLySanPham/uploads/<?php echo $row['hinhAnh'] ?>" width='150px'>
                </td>
            </tr>
            <tr>
                <td>Tom tat</td>
                <td><textarea rows="8" cols="100%" name="tomTat" style="resize: none;"><?php echo $row['tomTat'] ?></textarea></td>
            </tr>
            <tr>
                <td>Noi dung</td>
                <td><textarea rows="8" cols="100%" name="noiDung" style="resize: none;"><?php echo $row['noiDung'] ?></textarea></td>
            </tr>
            <tr>
                <td>Danh Mục</td>
                <td>
                    <select name="id_danhmuc">
                        <?php
                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $sql_query = mysqli_query($mysqli, $sql_danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($sql_query)) {
                            if ($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']) {
                        ?>
                                <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                        <?php
                            }
                        }
                        ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td>Tinh Trang</td>
                <td>
                    <select name="tinhTrang">
                        <?php
                        if ($row['tinhTrang'] == 1) {
                        ?>
                            <option value="1" selected>Kích hoạt</option>
                            <option value="0">Ẩn</option>
                        <?php
                        } else {
                        ?>
                            <option value="1">Kích hoạt</option>
                            <option value="0" selected>Ẩn</option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="8"><input type="submit" name="suaSanPham" value="Sua San Pham"></td>
            </tr>
        </form>
    <?php
    }
    ?>
</table>