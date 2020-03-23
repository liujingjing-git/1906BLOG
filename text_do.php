<?php
    $t_name = $_POST['t_name'];
    $t_names = $_POST['t_names'];
    $t_contens = $_POST['t_contens'];

    if(empty($t_name))
    {
        echo "新闻标题不得为空!";
    }else if(empty($t_names))
    {
        echo "发表人不得为空!";
    }else if(empty($t_contens))
    {
        echo "新闻内容不得为空!";
    }

    $link = mysqli_connect('localhost','root','root','1906blog');
    $sql = "insert into text(t_name,t_names,t_contens) values('$t_name','$t_names','$t_contens')";
    // var_dump($sql);die;
    $res = mysqli_query($link,$sql); 
    if($res)
    {
        echo "<script>alert('添加成功'),location='index.php';</script>";
    }else{
        echo "<script>alert('添加失败'),location='text.php';</script>";
    }

?>