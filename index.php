<?php
    $link = mysqli_connect('localhost','root','root','1906blog');
    $data = "select * from text";
    $res = mysqli_query($link,$data); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文章展示</title>
</head>
<body>
        <form action="">
            <table border="2">
                <tr>
                    <td>文章ID</td>
                    <td>文章名称</td>
                    <td>文章内容</td>
                    <td>发表人</td>
                </tr>
            <?php foreach($data as $k=>$v){ ?>
                <tr>
                    <td><?php echo $v['t_name']?></td>
                </tr>
            <?php }?>
            </table>
        </form>
</body>
</html>