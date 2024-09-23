<h3>Them San Pham</h3>
<table border="1px" width="100%" style="border-collapse: collapse;">
    <form method="POST" action="modules/quanLySanPham/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Ten San Pham</td>
            <td><input type="text" name="tenSanPham"></td>
        </tr>
        <tr>
            <td>Ma San Pham</td>
            <td><input type="text" name="maSanPham"></td>
        </tr>
        <tr>
            <td>Gia San Pham</td>
            <td><input type="text" name="giaSanPham"></td>
        </tr>
        <tr>
            <td>So luong</td>
            <td><input type="text" name="soLuong"></td>
        </tr>
        <tr>
            <td>Hinh anh</td>
            <td><input type="file" name="hinhAnh"></td>
        </tr>
        <tr>
            <td>Tom tat</td>
            <td><textarea rows="6" cols="100%" name="tomTat" style="resize: none;"></textarea></td>
        </tr>
        <tr>
            <td>Noi dung</td>
            <td><textarea rows="6" cols="100%" name="noiDung" style="resize: none;"></textarea></td>
        </tr>
        <tr>
            <td>Danh Mục</td>
            <td>
                <select name="id_danhmuc">
                    <?php
                    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $sql_query = mysqli_query($mysqli, $sql_danhmuc);
                    while ($row_danhmuc = mysqli_fetch_array($sql_query)) {
                    ?>
                        <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tinh Trang</td>
            <td>
                <select name="tinhTrang">
                    <option value="1">Kich Hoat</option>
                    <option value="0">An</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="9"><input type="submit" name="themSanPham" value="Them San Pham"></td>
        </tr>
    </form>

</table>