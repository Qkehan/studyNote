<?php
    header("Content-type:text/html;charset=utf-8");   
    
    $link = mysqli_connect("localhost","root","");     //连接服务器   
    mysqli_set_charset($link,'utf8');    
    mysqli_query($link, "use qkehan");     //选择数据库   


    $upID = $_POST['id'];  
    echo "<script>
            alert(' ".$upID." ');  
        </script>"; 
    $ename = $_POST['name'];
    $enews = $_POST['news']; 
    if(($ename || $enews) != ""){
        echo "<script>
                    alert('无空!');  
                </script>"; 
        
        if(isset($ename) && isset($enews) && isset($_POST['update'])){
            $upd = mysqli_query($link,"update news set name='$ename',news='$enews' where id='$upID' ");  
            if($upd){
                echo "<script>
                        alert('修改成功!');  
                        window.location.href='index.php';  
                    </script>"; 
            }else{
                echo "<script>
                        alert('修改失败!');  
                        window.location.href='edit.php';  
                    </script>"; 
            }
        };   
        
    } else {
        echo "<script>
                    alert('标题与内容不能为空!');  
                    window.location.href='edit.php';  
                </script>"; 
    };

    
    



?>