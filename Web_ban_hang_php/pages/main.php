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
        //vinh
    }elseif ($des=='vanChuyen') {
        include("main/vanChuyen.php");
    }elseif ($des=='thongTinThanhToan') {
        include("main/thongtinthanhtoan.php");
    }elseif ($des=='donHangDaDat') {
        include("main/donhangdadat.php");
        //vinh
    } elseif ($des == 'danhmucbaiviet') {
        include("main/danhmucbaiviet.php");
    } elseif ($des == 'baiviet') {
        include("main/baiviet.php");
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
    } elseif ($des == 'dangky') {
        include("pages/main/dangky.php");
    } elseif ($des == 'timKiem') {
        include("main/timKiem.php");
    } elseif ($des == 'doimatkhau') {
        include("pages/main/doimatkhau.php");
    } elseif ($des == 'camon') {
        include("pages/main/camon.php");
    } else {
        include("main/index.php");
    }
    ?>
</div>