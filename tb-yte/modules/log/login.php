﻿<?php
get_header();
?>

<?php
if (isset($_POST['username'])) {
    $error = array();
    // if (check_admin('admin@gmail.com', '123456')) {
    //     $_SESSION['is_login'] = true;
    //     $_SESSION['user_login'] = $username;
    //     redirect("?mod=home&act=admin");
    // }
    if (empty($_POST['username']))
        $error['username'] = "Không được để trống username";
    else {
        if (!is_username($_POST['username']))
            $error['username'] = "Username cho phép và sử dụng các ký tự A-Z, a-z, 0-9, _, . và độ dài từ 6-32 ký tự ";
        else {
            $username = $_POST['username'];
        }
    }
    if (empty($_POST['password']))
        $error['password'] = "Không được để trống password";
    else {
        if (!is_password($_POST['password']))
            $error['password'] = "Password sử dụng 1 kí tự hoa, ký tự đặc biệt và dài từ 6-32 ký tự ";
        else {
            $password = $_POST['password'];
        }
    }
    if (empty($error)) {
        if (check_admin($username, $password)) {
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            echo "<script>alert('Đăng nhập thành công!');window.location.href='?mod=home&act=admin';</script>";
            // redirect("?mod=home&act=admin");
        } else if (check_login($username, $password)) {
            //lưu trữ phiên đăng nhập
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            echo "<script>alert('Đăng nhập thành công!');window.location.href='?mod=home&act=main';</script>";
            // redirect("?mod=home&act=main");
        } else {
            $error['acount'] = "Đăng nhập thất bại";
        }
    }
}
?>

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Đăng nhập</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- customer login start -->
<div class="customer_login">
    <!-- <div class="row"> -->
    <!--login area start-->
    <!-- <div class="col-lg-6 col-md-6"> -->
    <div class="account_form">
        <h2>Đăng nhập</h2>
        <form action="" method="POST">
            <p>
                <label>Tên đăng nhập hoặc email <span>*</span></label>
                <input type="text" name="username" id="username" autocomplete="off" /><br>
                <?php echo form_error('username'); ?>
            </p>
            <p>
                <label>Mật khẩu <span>*</span></label>
                <input type="password" name="password" id="password"><br>
                <?php echo form_error('password'); ?>
            </p>
            <div class="login_submit">
                <button type="submit" name="btn_login" value="login">Đăng nhập</button>
                <a href="?mod=log&act=reg" class="reg">Đăng kí</a>
                <a href="#">Quên mật khẩu? &nbsp;&nbsp;</a>
                <label for="remember">
                    <input id="remember" type="checkbox" name="remember_me">
                    Ghi nhớ đăng nhập
                </label>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<!-- customer login end -->
<?php
get_footer();
?>