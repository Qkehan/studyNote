<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>图书查询</title>
    <style>
        .one{
            background-color: #ff0000;
            border: 0px;
            border-radius: 5px;
            color: white;
        }
        .two{
            color: #ff0000;
            border: 1px solid gray;
            border-radius: 5px;  
        }
        table{
            width: 375px;  
            height: 350px;  
        }
    </style>
</head>

<body text="#ff0000" style="font-size: 14px;">
    <table align="center" border="1" bordercolor="#ff0000" cellpacing="0px">
        <tr>
            <td>
                <table>
                    <tr>
                        <td bgcolor="#ffcc99">查询指定价格的数据内容</td>
                    </tr>
                    <tr>
                        <td align="center">
                            <form action="index.php" method="POST">
                                <input type="text" class="two" name="text1" value="输入最低价格" onfocus="this.value='' "><br><br>
                                <input type="text" class="two" name="text" value="输入最高价格" onfocus="this.value='' "><br><br>
                                <input type="submit" class="one" name="sub" value="查看&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">
                                <font color="#999999" size="-1">格式:XX.X</font>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>
<?php
    if(isset($_POST['sub'])){
        $low = $_POST['text1'];
        $high = $_POST['text'];  
        if($low == "" || $high == ""){
            echo "<script>
                    alert('请输入价格!');   
                </script>";  
        } else {
            $link = mysqli_connect("localhost","root","");     //连接服务器   
            mysqli_set_charset($link,'utf8');    
            mysqli_query($link, "use qkehan");     //选择数据库   

            $sel = mysqli_query($link, "select * from book where rate between '$low' and '$high' ");  
        };
?>
                            <table width="580px" bgcolor="#fecfb5">
                                <tr>
                                    <td>ID</td>
                                    <td>书名</td>
                                    <td>价格</td>
                                    <td>日期</td>
                                </tr>
<?php
        while($arr = mysqli_fetch_array($sel)){
        //id  name  pen  pub  date  rate  
?>
                                <tr>
                                    <td bgcolor="#ffffff"><?php echo $arr[0]; ?></td>
                                    <td bgcolor="#ffffff"><?php echo $arr[1]; ?></td>
                                    <td bgcolor="#ffffff"><?php echo $arr[5]; ?></td>
                                    <td bgcolor="#ffffff"><?php echo $arr[4]; ?></td>
                                </tr>
<?php
        };   
    };   
?>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>



    
    
</body>
</html>