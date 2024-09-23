<?php
include('..//..//config/config.php');
$tensp = $_POST['tenSanPham'];
$masp = $_POST['maSanPham'];
$giasp = $_POST['giaSanPham'];
$soluong = $_POST['soLuong'];
$tomtat = $_POST['tomTat'];
$noidung = $_POST['noiDung'];
$tinhtrang = $_POST['tinhTrang'];
$id_dm = $_POST['id_danhmuc'];
// hinh anh
$hinhanh = $_FILES['hinhAnh']['name'];
$hinhanh_tmp = $_FILES['hinhAnh']['tmp_name'];

if (isset($_POST['themSanPham'])) {
    $sql_them = "INSERT INTO tbl_sanpham(maSanPham,tenSanPham,giaSanPham,soLuong,hinhAnh,tomTat,noiDung,id_danhmuc,tinhTrang) VALUE('" . $masp . "','" . $tensp . "','" . $giasp . "','" . $soluong . "','" . $hinhanh . "','" . $tomtat . "','" . $noidung . "','" . $id_dm . "','" . $tinhtrang . "')";
    mysqli_query($mysqli, $sql_them);
    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
    header('Location:../../index.php?action=quanLySanPham&query=them');
} elseif (isset($_POST['suaSanPham'])) {
    if ($hinhanh != '') {
        move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
        $sql = "SELECT * FROM tbl_sanpham WHERE maSanPham ='$_GET[idsp]' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/' . $row['hinhAnh']);
        }
        $sql_update = "UPDATE tbl_sanpham SET tenSanPham='" . $tensp . "', maSanPham='" . $masp . "', giaSanPham='" . $giasp . "', soLuong='" . $soluong . "', hinhAnh='" . $hinhanh . "', tomTat='" . $tomtat . "', noiDung='" . $noidung . "', tinhTrang='" . $tinhtrang . "', id_danhmuc='" . $id_dm . "' WHERE maSanPham='$_GET[idsp]'";
    } else {
        $sql_update = "UPDATE tbl_sanpham SET tenSanPham='" . $tensp . "', maSanPham='" . $masp . "', giaSanPham='" . $giasp . "', soLuong='" . $soluong . "',tomTat='" . $tomtat . "', noiDung='" . $noidung . "', tinhTrang='" . $tinhtrang . "', id_danhmuc='" . $id_dm . "' WHERE maSanPham='$_GET[idsp]'";
    }
    mysqli_query($mysqli, $sql_update);
    header('Location:../../index.php?action=quanLySanPham&query=them');
} else {
    $id = $_GET['idsp'];
    $sql = "SELECT * FROM tbl_sanpham WHERE idSanPham ='$id' LIMIT 1";
    $query = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['hinhAnh']);
    }
    $sql_xoa = "DELETE FROM tbl_sanpham WHERE idSanPham='" . $id . "'";
    mysqli_query($mysqli, $sql_xoa);
    header('Location:../../index.php?action=quanLySanPham&query=them');
}
