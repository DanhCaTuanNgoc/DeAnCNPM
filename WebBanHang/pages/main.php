<div id="main">
    <?php
    if (isset($_GET['quanly'])) {
        $des = $_GET['quanly'];
    } else {
        $des = '';
    }
    if ($des == 'danhmucsanpham') {
        include("main/danhmuc.php");
    } elseif ($des == 'giohang') {
        include("main/giohang.php");
    } elseif ($des == 'tintuc') {
        include("main/tintuc.php");
    } elseif ($des == 'lienhe') {
        include("main/lienhe.php");
    } elseif ($des == 'sanpham') {
        include("main/sanpham.php");
    } elseif ($des == 'dangnhap') {
        include("main/dangnhap.php");
    } else {
        include("main/index.php");
    }
    ?>
</div>