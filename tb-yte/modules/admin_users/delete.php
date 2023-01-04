<?php
$id = (int)$_GET['id'];
$sql = "DELETE FROM `dhd_users` WHERE `user_id` = {$id}";
if(mysqli_query($conn, $sql)){
    redirect("?mod=admin_users&act=main");
}


