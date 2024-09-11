<div class="main">
    <div class="maincontent">
        <?php 
            if(isset($_GET['quanly'])) {
                $des = $_GET['quanly'];
            } else {
                $des = '';
            } if($des == 'account') {
                include("main/account.php");
            } elseif($des == '') {
                include("main/home.php");
            } elseif($des == 'collections') {
                include("main/collections.php");
            } elseif($des == 'products') {
                include("main/products.php");
            } else {
                // include NOT FOUND
            }
        ?>
    </div>
</div>