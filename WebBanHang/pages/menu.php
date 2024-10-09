<?php 
$sql_lietke = "SELECT * FROM tbl_danhmucqa ORDER BY id_dm DESC ";
$lietke = mysqli_query($mysqli, $sql_lietke);
?>
<div class="menu">
    <div class="menu_content">
        <div class="menu_items">
            <a class="item" href="index.php">Trang chủ<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
        </div>
        <!-- Thêm nút Đăng ký và Đăng nhập -->
        <div class="menu_items">
            <a class="item" href="index.php?quanly=dangky">Đăng ký<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
        </div>
        <div class="menu_items">
            <a class="item" href="index.php?quanly=dangnhap">Đăng nhập<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
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
        </div>
        <div class="menu_items">
            <a class="item" href="index.php?quanly=lienhe">Liên hệ<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
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
                            <input class="search_input" type="text" name="tuKhoa" id="search-box" placeholder="......">
                            <button class="search_btn" type="submit" name="timKiem" class="icon_container">
                                <img src="../images/search-icon.svg" alt="arrow">
                            </button>
                        </form>
                    </div>
                </li>
                <li> 
                    <a class="item" href="index.php">Trang chủ<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
                </li>
                <!-- Thêm nút Đăng ký và Đăng nhập trong drawer -->
                <li>
                    <a class="item" href="index.php?quanly=dangky">Đăng ký<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
                </li>
                <li>
                    <a class="item" href="index.php?quanly=dangnhap">Đăng nhập<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
                </li>
                <?php
                // Reset con trỏ kết quả truy vấn về đầu để lặp lại
                mysqli_data_seek($lietke, 0); // Đưa con trỏ về đầu
                while ($row_danhmuc = mysqli_fetch_array($lietke)) {
                ?>
                    <li>
                        <a class="item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_dm'] ?>"><?php echo $row_danhmuc['name_sp'] ?><span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
                    </li>
                <?php } ?>
                <li> 
                    <a class="item" href="index.php?quanly=giohang">Giỏ hàng<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
                </li>
                <li> 
                    <a class="item" href="index.php?quanly=tintuc">Tin tức<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
                </li>
                <li>
                    <a class="item" href="index.php?quanly=lienhe">Liên hệ<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
                </li>
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

        // Mở ngăn kéo
        hamburger.addEventListener('click', function() {
            drawer.style.width = '250px';
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
    });
</script>
