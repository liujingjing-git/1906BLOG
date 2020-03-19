<?php
    $login_name = $_POST['login_name'];
    $login_tel = $_POST['login_tel'];
    $login_email = $_POST['login_email'];
    $login_pwd = md5($_POST['login_pwd']);
    $password = md5($_POST['password']);

    if(empty($login_name))
    {
        echo "用户名不得为空!";
    }else if(empty($login_tel))
    {
        echo "电话不得为空";
    }else if(empty($login_email))
    {
        echo "邮箱不得为空";
    }else if(empty($login_pwd))
    {
        echo "密码不得为空";
    }else if(empty($password))
    {
        echo "密码不得为空";
    }else if($login_pwd!==$password)
    {
        echo "密码和确认密码不一致";
    }

    //链接数据库
    $link = mysqli_connect('localhost','root','root','1906blog');
    // if($link){
    //     echo "链接成功";
    // }else{
    //     echo "连接失败";die;
    // }
   $sql = "insert into login(login_name,login_tel,login_email,login_pwd,password) values('$login_name','$login_tel','$login_email','$login_pwd','$password')";
   $res = mysqli_query($link,$sql); 
    if($res)
    {
        echo "<script>alert('恭喜 注册成功啦'),location='login.php';</script>";
    }else{
        echo "<script>alert('哎呀 注册失败啦'),location='add.php';</script>";
    }
?>