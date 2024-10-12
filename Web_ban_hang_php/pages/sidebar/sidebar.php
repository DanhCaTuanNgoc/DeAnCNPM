<?php
	$sql_cate= "SELECT * FROM tbl_danhmucqa ORDER BY id_dm DESC ";
	$cate= mysqli_query($mysqli,$sql_cate);
?>

<div class="sidebar">
    <div class="filter_content">
        <div class="filter_title">
            <p class="title">Bộ lọc sản phẩm</p>
            <p style="margin : 4px 0px;">Lọc nhanh sản phẩm tìm kiếm</p>
        </div>
    </div>
    <!-- <div class="cate_content">
        <div class="cate_title_sidebar"><p class="title">Danh mục</p></div>
        <ul class="list_sidebar">
            <?php 
                while($dm = mysqli_fetch_array($cate)) {
            ?>
            <li><a href="#"><?php echo $dm['name_sp']?></a></li>
            <?php } ?>
        </ul>
    </div> -->
</div>