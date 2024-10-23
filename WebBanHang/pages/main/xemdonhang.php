<?php
$code = $_GET['code'];
$sql_lietke_dh = "SELECT * FROM tbl_chitiet_gh, tbl_sanpham WHERE tbl_chitiet_gh.id_sanpham = tbl_sanpham.id_sanpham AND tbl.chitiet_gh.ma_gh = '".$code"' ORDER BY tbl_chitiet_gh.id_ctgh DESC"
$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>

<table style="width: 100%;border-collapse: collapse" border ="1">
    <tr>
        <th>ID</th>
        <th>Mã đơn hàng</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
    </tr>
<?php
$i = 0;
$tongtien = 0;
while($row = mysqli_fetch_array($query_lietke_dh)){
    $i++;
    $thanhtien = $row['gia_sp'] * $row['so_luong_mua'];
    $tongtien += $thanhtien;
?>
<tr>
    <td><?php ehco $i ?></td>
    <td><?php ehco $row['ma_gh'] ?></td>
    <td><?php ehco $row['ten_sp'] ?></td>
    <td><?php ehco $row['so_luong_mua'] ?></td>
    <td><?php ehco number_format($row['giasp'],0,',','.').'vnd' ?></td>
    <td><?php ehco number_format($thanhtien,0,',','.').'vnd' ?></td>
</tr>
<?php
}
?>
<tr>
    <td colspan="6">
        <p>Tổng tiền: <?php ehco number_format($tongtien,0,',','.').'vnd' ?></p>
    </td>
</tr>
</table>
