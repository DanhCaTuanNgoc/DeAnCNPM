<div class="main_content">
    <h3 style="text-align: center; text-transform: uppercase">Tin tức mới nhất</h3>
    <ul class="product_list">
        <?php
        // Fetch 10 latest news in ascending order by id
        $sql_tintuc = "SELECT * FROM tbl_baiviet ORDER BY id ASC LIMIT 10";
        $query_tintuc = mysqli_query($mysqli, $sql_tintuc);

        while($row_tintuc = mysqli_fetch_array($query_tintuc)) {
        ?>
        <li>
            <a href="<?php echo $row_tintuc['link']; ?>">
                <img src="admincp/modules/quanLyBaiViet/uploads/<?php echo $row_tintuc['hinhanh']; ?>" alt="<?php echo $row_tintuc['tenbaiviet']; ?>">
            </a>
            <p class="product_name"><?php echo $row_tintuc['tenbaiviet']; ?></p>
        </li>
        <?php
        }
        ?>
    </ul>
</div>
