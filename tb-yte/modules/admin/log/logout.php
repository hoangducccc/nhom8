
<?php
unset($_SESSION['is_login']);
unset($_SESSION['user_login']);
unset($_SESSION['user_id']);
$_SESSION['cart']['buy'] = array();
echo "<script>alert('Đăng xuất thành công!');window.location.href='?mod=home&act=main';</script>";
?>