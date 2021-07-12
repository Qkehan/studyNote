<?php
$info = array(
    array('name'=>'王六','birth'=>'1996-08-07','subject'=>'PHP','snum'=>'0150427001'),
    array('name'=>'张三','birth'=>'1995-12-23','subject'=>'PHP','snum'=>'0150427002'),
    array('name'=>'赵二','birth'=>'1996-01-09','subject'=>'PHP','snum'=>'0150427003'),
    array('name'=>'孙四','birth'=>'1995-05-04','subject'=>'PHP','snum'=>'0150427004'),
    array('name'=>'钱一','birth'=>'1996-06-24','subject'=>'PHP','snum'=>'0150427005'),
    array('name'=>'郑七','birth'=>'1995-10-10','subject'=>'PHP','snum'=>'0150427006'),
    array('name'=>'白三','birth'=>'1996-12-28','subject'=>'PHP','snum'=>'0150427007'),
    array('name'=>'李四','birth'=>'1995-11-01','subject'=>'PHP','snum'=>'0150427008'),
    array('name'=>'陆八','birth'=>'1996-02-02','subject'=>'PHP','snum'=>'0150427009'),
    array('name'=>'刘六','birth'=>'1995-03-08','subject'=>'PHP','snum'=>'0150427010'),
    array('name'=>'谭九','birth'=>'1996-06-01','subject'=>'PHP','snum'=>'0150427011'),
    array('name'=>'韩十','birth'=>'1995-07-09','subject'=>'PHP','snum'=>'0150427012'),
    array('name'=>'史二','birth'=>'1996-11-11','subject'=>'PHP','snum'=>'0150427013')
    );
    foreach ($info as $key => $value) {
        foreach ($value as $key => $val) {
            echo "$key=>$val"."、";
        }
        echo "<br>";  
    }
    echo "<hr>";  
    echo "&nbsp;&nbsp;<a href="index.php?cPage=0;">第一页</a>";  
    echo "&nbsp;&nbsp;<a href="index.php?cPage=0;">第二页</a>"; 
    echo "&nbsp;&nbsp;<a href="index.php?cPage=0;">第三页</a>"; 

?>