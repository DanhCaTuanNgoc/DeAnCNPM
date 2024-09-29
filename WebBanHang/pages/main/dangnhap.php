<?php
if (isset($_POST['dangNhap'])) {
    $email = $_POST['email'];
    $mat_khau = md5($_POST['mat_khau']);
    $sql = "SELECT * FROM tbl_dangky WHERE email = '" . $email . "' AND mat_khau = '" . $mat_khau . "' LIMIT 1 ";
    $row = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $row_data = mysqli_fetch_array($row);
        $_SESSION['dang_ky'] = $row_data['ten_khachhang'];
        // header('Location:../../index.php?quanly=giohang');
        echo "<script>window.location.href='index.php?';</script>";
        exit;
    }
}
?>
<div class="main_content">
    <div class="login_container">
        <p style="font-weight: bold; font-size : 20px; margin : 20px 0 10px 0;">Đăng nhập</p>
        <form method="POST" class="login_content">
            <!-- CHUA LAM VANLIDATE EMAIL -->
            <div class="input-box">
                <label>Email :</label>
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="text" class="email" name="email" required>
            </div>
            <div class="input-box">
                <!-- <span class="icon"><ion-icon name="lock-closed"></ion-icon></span> -->
                <label>Mật khẩu :</label>
                <input type="password" name="mat_khau" class="password" required>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Lưu đăng nhập</label>
                <a href="#">Quên mật khẩu?</a>
            </div>
            <button class="login_form_btn" type="submit" name="dangNhap">Đăng nhập</button>
            <p>Chưa có tài khoản?<a class="registerlink" href="index.php?quanly=dangky">Đăng ký</a></p>
        </form>
    </div>
</div>