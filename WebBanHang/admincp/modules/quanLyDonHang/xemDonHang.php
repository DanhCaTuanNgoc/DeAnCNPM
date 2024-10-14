<?php
$code = $_GET['code'];
$sql_lietke_dh= "SELECT * FROM tbl_chitiet_gh,tbl_sanpham WHERE tbl_chitiet_gh.id_sp = tbl_sanpham.id_sp AND tbl_chitiet_gh.ma_gh='".$code."' ORDER BY tbl_chitiet_gh.id_ctgh DESC ";
$lietke_dh= mysqli_query($mysqli,$sql_lietke_dh);
?>

<div class="container mt-5">
    <h3 class="text-center mb-4">Xem Đơn Hàng</h3>

    <table class="table table-bordered table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Mã Giỏ Hàng</th>
                <th>Tên Sản Phẩm</th>
                <th>Số Lượng</th>
                <th>Đơn Giá</th>
                <th>Thành Tiền</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            $tongtien=0;
            while ($row = mysqli_fetch_array($lietke_dh)) {
                $i++;
                $thanhtien = $row['so_luong_mua'] * $row['gia_sp'];
                $tongtien += $thanhtien;
            ?>
                <tr>
                    <td> <?php echo $i ?></td>
                    <td> <?php echo $row['ma_gh'] ?></td>
                    <td> <?php echo $row['ten_sp'] ?></td>
                    <td> <?php echo $row['so_luong_mua'] ?></td>
                    <td> <?php echo number_format($row['gia_sp'],0,',','.').' VND' ?></td>
                    <td> <?php echo number_format($thanhtien,0,',','.').' VND' ?></td>
                </tr>
            <?php
            }   
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5"><strong>Tổng Tiền:</strong></td>
                <td><strong><?php echo number_format($tongtien,0,',','.').' VND' ?></strong></td>
            </tr>
        </tfoot>
    </table>
</div>
