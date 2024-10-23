<?php $sql_lietke = "SELECT * FROM tbl_danhmucqa ORDER BY id_dm DESC ";
$lietke = mysqli_query($mysqli, $sql_lietke);
?>
<div class="menu">
    <div class="menu_content">
        <div class="menu_items">
            <a class="item" href="index.php">Trang chủ<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
        </div>
        <?php
        while ($row_danhmuc = mysqli_fetch_array($lietke)) {
        ?>
            <div class="menu_items">
                <a class="item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_dm'] ?>"><?php echo $row_danhmuc['name_sp'] ?><span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
            </div>
        <?php } ?>
        <div class="menu_items">
            <a class="item" href="index.php?quanly=giohang">Giỏ hàng<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
        </div>
        
        <div class="menu_items">
            <a class="item" href="index.php?quanly=tintuc">Tin tức<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
            <div class="news_content" id="news_content">                
                    <?php
                        // Lấy danh mục bài viết
                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc_baiviet ORDER BY id_baiviet DESC";
                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                    <!-- <li style="text-decoration:none"> -->
                        <a href="index.php?quanly=danhmucbaiviet&id_baiviet=<?php echo $row_danhmuc['id_baiviet']; ?>">
                            <span style="text-transform: uppercase;"><?php echo $row_danhmuc['tendanhmuc_baiviet']; ?></span>
                        </a>
                    <!-- </li> -->
                    <?php 
                        }
                    ?>
            </div>
        </div>


        <div class="menu_items">
            <a class="item" href="index.php?quanly=lienhe">Liên hệ<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
        </div>
        <div class="menu_items">
            <a class="item" href="index.php?quanly=lichSuDonHang">Lịch sử đơn hàng<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
        </div>
        
        <div class="hamburger" id="hamburger">
            <img src="../images/bars-solid.svg" alt="" width="30px" height="30px">
        </div>
        <!-- Ngăn kéo (Drawer) -->
        <div class="drawer" id="drawer">
            <a href="#" class="close-btn" id="close-btn">&times;</a>
            <ul>
                <li>
                    <div class="search_container_menubar">
                        <form class="search_form" action="index.php?quanly=timKiem" method="POST">
                            <input class="search_input" type="text" name="tuKhoa" id="search-box" placeholder="Bạn cần tìm gì hôm nay ?">
                            <button class="search_btn" type="submit" name="timKiem" class="icon_container">
                                <img src="../images/search-icon.svg" alt="arrow">
                            </button>
                        </form>
                    </div>
                </li>
                <li> <a class="item" href="index.php">Trang chủ<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
                </li>
                <?php
                while ($row_danhmuc = mysqli_fetch_array($lietke)) {
                ?>

                    <li>
                        <a class="item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_dm'] ?>"><?php echo $row_danhmuc['name_sp'] ?><span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
                    </li>
                <?php } ?>
                <li> <a class="item" href="index.php?quanly=giohang">Giỏ hàng<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
                </li>

                <li> 
                
                <a class="item" href="index.php?quanly=tintuc" id="newsMenuItem">Tin tức<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>                
                <div class="news_content_burger" id="news_content_burger" style="display: none;">
                    <?php
                        // Lấy danh mục bài viết
                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc_baiviet ORDER BY id_baiviet DESC";
                        $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                        <a href="index.php?quanly=danhmucbaiviet&id_baiviet=<?php echo $row_danhmuc['id_baiviet']; ?>">
                            <span style="text-transform: uppercase;"><?php echo $row_danhmuc['tendanhmuc_baiviet']; ?></span>
                        </a><br>
                    <?php 
                        }
                    ?>
                </div>
                </li>

                <li><a class="item" href="index.php?quanly=lienhe">Liên hệ<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a></li>
            </ul>
        </div>
    </div>
</div>

<script>
    // Drawer
    document.addEventListener('DOMContentLoaded', function() {
        const hamburger = document.getElementById('hamburger');
        const drawer = document.getElementById('drawer');
        const closeBtn = document.getElementById('close-btn');
        const newsMenuItem = document.getElementById('newsMenuItem'); // Thêm ID cho mục tin tức
        const newsContentBurger = document.getElementById('news_content_burger');

        // Mở ngăn kéo
        hamburger.addEventListener('click', function() {
            drawer.style.width = '350px';
        });

        // Đóng ngăn kéo
        closeBtn.addEventListener('click', function(e) {
            e.preventDefault();
            drawer.style.width = '0';
        });

        // Đóng ngăn kéo khi nhấp ngoài
        window.addEventListener('click', function(e) {
            if (e.target == drawer) {
                drawer.style.width = '0';
            }
        });

        // Hiện danh mục khi di chuột vào mục "Tin tức"
        newsMenuItem.addEventListener('mouseover', function() {
               newsContentBurger.style.display = 'block'; // Hiện danh mục
        });

            // Ẩn danh mục khi di chuột ra ngoài "Tin tức" và danh mục
        newsMenuItem.addEventListener('mouseleave', function() {
            if (!newsContentBurger.matches(':hover')) {
                newsContentBurger.style.display = 'none'; // Ẩn danh mục
            }
        });

            // Giữ danh mục hiển thị khi di chuột vào danh mục
        newsContentBurger.addEventListener('mouseenter', function() {
            newsContentBurger.style.display = 'block'; // Giữ danh mục hiển thị
        });

            // Ẩn danh mục khi di chuột ra ngoài danh mục
        newsContentBurger.addEventListener('mouseleave', function() {
            newsContentBurger.style.display = 'none'; // Ẩn danh mục
        });
    });

</script>
