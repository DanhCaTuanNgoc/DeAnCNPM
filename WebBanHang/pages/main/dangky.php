<div class="main_content">
    <?php
    if (isset($_POST['dang_ky'])) {
        $ten_khachhang = $_POST['ten_khachhang'];
        $email = $_POST['email'];
        $dien_thoai = $_POST['dien_thoai'];
        $mat_khau = md5($_POST['mat_khau']);
        $dia_chi = $_POST['dia_chi'];
        $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(ten_khachhang,email,dia_chi,mat_khau,dien_thoai) VALUE('" . $ten_khachhang . "','" . $email . "','" . $dia_chi . "','" . $mat_khau . "','" . $dien_thoai . "')");
        if ($sql_dangky) {
            $_SESSION['dang_ky'] = $ten_khachhang;
            $registration = true;
            echo "<script>window.location.href='index.php?registration=1';</script>";
        }
    }
    ?>
    

    <div class="login_container">
        <p style="font-weight: bold; font-size : 20px; margin : 20px 0 20px 0;">Đăng ký</p>
        <form action="" method="POST" class="login_content">
            <div class="register_input_box">
                <label for="ten_khachhang">Họ và tên :</label>
                <input type="text" name="ten_khachhang">
            </div>
            <div class="register_input_box">
                <label for="email">Email :</label>
                <input type="text" name="email">
            </div>
            <div class="register_input_box">
                <label for="dien_thoai">Số điện thoại :</label>
                <input type="text" name="dien_thoai">
            </div>
            <div class="register_input_box">
                <label for="mat_khau">Mật khẩu :</label>
                <input type="text" name="mat_khau">
            </div>
            <div class="register_input_box">
                <label for="dia_chi">Địa chỉ :</label>
                <input type="text" name="dia_chi">
            </div>
            <input class="login_form_btn" type="submit" name="dang_ky" value="Đăng ký">
            <p>Đã có tài khoản?<a class="registerlink" href="index.php?quanly=dangnhap">Đăng nhập</a></p>
        </form>
    </div>
</div>