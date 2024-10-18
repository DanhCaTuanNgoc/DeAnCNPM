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
                <a href="index.php?quanly=baiviet&id=10">Video bóng đá: Sociedad - Atletico, Alvarez ghi bàn giây 51</a>
                <a href="index.php?quanly=baiviet&id=9">Video futsal: Brazil - Argentina, đăng quang kịch tính chung kết Futsal World Cup</a>
                <a href="index.php?quanly=baiviet&id=8">Video bóng đá: Brighton - Tottenham, hàng công thăng hoa</a>
                <a href="index.php?quanly=baiviet&id=6">Xấu hổ: Dàn sao MU thua ông già 36 tuổi, Rashford bị nghi nói xấu Ten Hag</a>
                <a href="index.php?quanly=baiviet&id=5">Lewandowski ghi 3 bàn đỉnh cao, bắt kịp Haaland đua Chiếc Giày Vàng</a>
                <a href="index.php?quanly=baiviet&id=4">Ten Hag cúi đầu: Ai đã cứu thầy tạm sống sót?</a>
                <a href="index.php?quanly=baiviet&id=3">BXH Ngoại hạng Anh: MU tệ nhất lịch sử, Chelsea lung lay top 4</a>
                <a href="index.php?quanly=baiviet&id=2">MU chậm sa thải Ten Hag</a>
            </div>
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
                <li> <a class="item" href="index.php?quanly=tintuc">Tin tức<span class="arrow_menu"><img src="../images/arrow-icon.svg" alt="arrow"></span></a>
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
