<?php
 
$login_name = $_POST['login_name'];
$login_pwd = $_POST['login_pwd'];

if(empty($login_name))
{
    echo "<script>alert('用户名不得为空'),location='login.php';</script>";
}
if(empty($login_pwd))
{
    echo "<script>alert('密码不得为空'),location='login.php';</script>";
}

$sql = "select * from login";
var_dump($sql);

?>