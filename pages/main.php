<div class="main">
    <div class="maincontent">
        <?php
        if (isset($_GET['quanly'])) {
            $des = $_GET['quanly'];
        } else {
            $des = '';
        }
        if ($des == 'account') {
            include("main/account.php");
        } elseif ($des == 'home' || $des == '') {
            include("main/home.php");
        } elseif ($des == 'collections') {
            include("main/collections.php");
        } elseif ($des == 'products') {
            include("main/products.php");
        } elseif ($des == 'CSBH') {
            include("pages/main/Thongtinchung/CSBH.php");
        } elseif ($des == 'CSVC') {
            include("pages/main/Thongtinchung/CSVC.php");
        } elseif ($des == 'CSQDC') {
            include("pages/main/Thongtinchung/CSQDC.php");
        } elseif ($des == 'QDHTTT') {
            include("pages/main/Thongtinchung/QDHTTT.php");
        } elseif($des == 'CSDT') {
            include("pages/main/Thongtinchung/CSDT.php");
        } 
         elseif($des == 'CSBM') {
            include("pages/main/Thongtinchung/CSBM.php");
        } 
        else {
            print('loi');
        }
        ?>
    </div>
</div>