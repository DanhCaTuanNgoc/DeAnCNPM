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
            $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
            $registration = true;
            echo "<script>window.location.href='index.php?registration=1';</script>";
        }
    }
    ?>
    

    <div class="login_container">
        <p style="font-weight: bold; font-size : 20px; margin : 20px 0 20px 0;">Đăng ký</p>
        <form action="" method="POST" class="login_content" id="registerForm">
            <div class="register_input_box">
                <label for="ten_khachhang">Họ và tên :</label>
                <input type="text" name="ten_khachhang">
            </div>
            <div class="register_input_box">
                <label for="email">Email :</label>
                <input id="email" type="text" name="email">
            </div>
            <div id="email_error" style="display : none; width : 100%; color :red; padding : 4px 8px; justify-content : start;margin-bottom: 15px; font-size : 14px; align-items : center;">Email không đúng định dạng</div>
            <div class="register_input_box">
                <label for="mat_khau">Mật khẩu :</label>
                <input type="password" name="mat_khau">
            </div>
            <div class="register_input_box">
                <label for="dien_thoai">Số điện thoại :</label>
                <input type="text" name="dien_thoai">
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
<script>
    // VANLIDATE EMAIL
    // document.getElementById('email').addEventListener('blur', function() {
    //     var email = document.getElementById('email').value;
    //     var email_error = document.getElementById('email_error');
        
    //     // Regular expression to validate the email format
    //     var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        
    //     // Check if email matches the pattern
    //     if (!emailPattern.test(email)) {
    //         email_error.style.display = 'flex';  // Show error message
    //     } else {
    //         email_error.style.display = 'none';   // Hide error message
    //     }
    // });

    document.getElementById('registerForm').addEventListener('submit', function(event) {
        var email = document.getElementById('email').value;
        var email_error = document.getElementById('email_error');
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

        // Check email again before submission
        if (!emailPattern.test(email)) {
            email_error.style.display = 'flex';  // Show error message
            event.preventDefault();  // Prevent form from submitting
        }
    });
</script>