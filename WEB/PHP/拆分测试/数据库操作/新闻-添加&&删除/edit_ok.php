<?php
    include('conn.php');   
    $eid = $_POST['id'];  
    echo "<script>
            alert(' ".$eid." ');  
        </script>"; 
    $ename = $_POST['name'];
    $enews = $_POST['news'];     
    if(isset($eid) && isset($_POST['Submit'])){
        $upd = mysqli_query($conn,"update news set name='$ename',news='$enews' where id='$eid' ");  
        if($upd){
            echo "<script>
                    alert('修改成功!');  
                    window.location.href='index.php';  
                </script>"; 
        }else{
            echo "<script>
                    alert('修改失败!');  
                    window.location.href='index.php';  
                </script>"; 
        }
    };  
    
  


?>