<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    //判断文件上传到临时目录是否会出错，如果出错就退出
    if($_FILES['userfile']['error']>0){
        switch($_FILES['userfile']['error']){
            case 1:
                $msg="文件超出php.ini中upload_max_filesize选中限制的值";   break;
            case 2:
                $msg="文件大小超出php.index表单中upload_max_filesize选中限制的值";   break;
            case 3:
                $msg="文件只有部分被上传";   break;
            case 4:
                $msg="没有文件上传";   break;
            case 6:
                $msg="找不到临时文件";   break;      
            case 7:
                $msg="文件写入失败";   break;  
            default:
                $msg="未知错误"; break; 
        }
        echo $msg;  
        exit;  
    }
    //上传目录成功，然后将其复制到指定文件夹中。
    $des='uploads/'.$_FILES['userfile']['name'];  //将要被复制到的服务器 目录&文件名称       
    //判断是否移动  
    if(is_uploaded_file($_FILES['userfile']['tmp_name'])){
        //如果临时文件夹有东西，就移动  
        if(move_uploaded_file($_FILES['userfile']['tmp_name'], $des)){
            echo '上传成功！';   
        }
    }
?>

<body>
    
</body>
</html>
