<?php
$sql_sua = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[id_dm]' LIMIT 1";
$sua = mysqli_query($mysqli, $sql_sua);
?>
<h3>Sua danh muc san pham</h3>
<table border="1px" style="border-collapse: collapse;">
    <?php   
    while ($dong = mysqli_fetch_array($sua)) {
    ?>
        <form method="POST" action="modules/quanLyDanhMucSanPham/xuly.php?id_dm=<?php echo $_GET['id_dm'] ?>">

            <tr>
                <td>Ten Danh Muc</td>
                <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
            </tr>
            <tr>
                <td>Thu tu</td>
                <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="suaDanhMuc" value="Sửa Danh Muc San Pham"></td>
            </tr>

        </form>
    <?php
    }
    ?>
</table>