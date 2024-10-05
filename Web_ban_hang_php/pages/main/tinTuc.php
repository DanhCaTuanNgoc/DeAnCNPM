
    <h3 style="text-align: center; text-transform: uppercase">Tin tức mới nhất</h3>
    <?php
    $sql_bv = "SELECT * FROM tbl_baiviet WHERE tinhtrang=1 ORDER BY id DESC";
    $query_bv = mysqli_query($mysqli, $sql_bv);

    ?>
    <ul class="product_list">
        <?php
        while ($row_bv   = mysqli_fetch_array($query_bv)) {
        ?>
            <li>
                <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>	">
                    <img src="admincp/modules/quanLyBaiViet/uploads/<?php echo $row_bv['hinhanh'] ?>">
                </a>
                <p class="product_name"><?php echo $row_bv['tenbaiviet'] ?></p>
                <p class="product_name"><?php echo $row_bv['tomtat'] ?></p>

            </li>
        <?php
        }
        ?>
    </ul>
