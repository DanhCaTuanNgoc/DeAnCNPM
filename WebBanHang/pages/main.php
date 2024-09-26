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
    } elseif ($des == 'CSBH') {
        include("main/Thongtinchung/CSBH.php");
    } elseif ($des == 'CSVC') {
        include("main/Thongtinchung/CSVC.php");
    } elseif ($des == 'CSQDC') {
        include("main/Thongtinchung/CSQDC.php");
    } elseif ($des == 'QDHTTT') {
        include("main/Thongtinchung/QDHTTT.php");
    } elseif ($des == 'CSDT') {
        include("main/Thongtinchung/CSDT.php");
    } elseif ($des == 'CSBM') {
        include("main/Thongtinchung/CSBM.php");
    } else {
        include("main/index.php");
    }
    ?>
</div>