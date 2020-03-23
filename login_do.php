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

$sql = "select * from login where login_name";
if($sql)
{
    echo "<script>alert('登陆成功'),location='index.php';</script>";
}else{
    echo "<script>alert('登录失败'),location='login.php';</script>";
}

?>