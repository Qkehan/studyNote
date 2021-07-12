<?php
    header("Content-type:text/html;charset=utf-8");  //中文  
    
    echo '欢迎您！！';
    date_default_timezone_set("PRC");   //设置时区   
    echo date("Y-m-d H:i:s")."<br>";  
    echo '【4-PHP函数】'."<br>"; 
    echo "当前文件的路径为：".__FILE__.'<br><hr>';    //获取当前文件路径  
    //
    //************【函数的定义与调用】************
    // 函数是由多行代码组件的代码块，用于完成某项任务。一般情况下，一个任务需要多次执行，需要定义函数。  
    //1、定义函数语法：  
    /*
    function 函数名称（参数1，参数2）{
        //代码块  
        return 返回值；  
    }
    */
    //2、函数的调用：  
    /*
    函数名（参数）；  
    $abc = 函数名（参数）；   
    */
    //例：定义函数example()，计算传入的参数的平方，然后连同表达式和结果全部输出。   
    function example($num){
        return "$num * $num = ".($num*$num);    
    }
    echo example(32);  
    echo "<br>";     
    //
    //*********【PHP函数间传递参数】*********
    // 在调用函数时需要向函数传递参数，被传入的参数为实参；    
    // 函数定义少儿参数称为形参；   
    //
    //函数间传递参数的形式：   
    //1、按值传递  
    // 将实参的值复制到对应的形参中，在函数的内部操作针对形参进行，操作的结果不会影响到实参，即函数返回后，实参的值不会改变。   
    function example2($m){
        $m = $m * 5 + 10;   
        echo "在函数内部：\$m = ".$m;   
    }  
    $m = 1;   
    example2($m);   // 在函数内部：$m = 15  
    echo "<br>";   
    echo "<p>在函数外：\$m = $m</p><br>";     //在函数外：$m = 1   
    //
    //2、按引用传递（传地址）  
    // 将实参的‘内存地址’传递到对应的形参中，在函数内部的所有操作都会影响到实参，即函数返回后，实参的值会改变。    
    function example3(&$m){   //&符号，取地址符号，应放在形参前面。      
        $m = $m * 5 + 10;   
        echo "在函数内部：\$m = ".$m;   
    }  
    $m = 5;   
    example3($m);   //在函数内部：$m = 35   
    echo "<p>在函数外：\$m = $m</p><br>";     //在函数外：$m = 35   
    //
    //
    //3、默认参数 & 可选参数    
    // 定义形参时，可以指定某个参数为“可选参数”，将可选参数列表末尾，并指定默认值。   
    function values($price,$tax=""){  //可选参数必须有默认值，一定在后面，也可以null的，赋值一个空   
        $price=$price+($price*$tax);  
        echo "价格：$price<br>";
    };
    values(100,0.25);   //125    
    values(100);  //100  
    //
    //***********【PHP函数返回值】*************
    // 使用return语句返回值； 注意，函数定义时不需要声明返回值。   
    //
    //*****【小结】*****
    //自定义函数，实现从0到N的累加，使用该函数，计算加到15的累加和。   
    function numP($n,$b="0"){
        $num = 0;
        for($i=$b;$i<=$n;$i++){
            $num = $num + $i;  
        }
        return "$b~$n 的累加和为$num <br>";  
    }
    echo numP(15);  //0~15 的累加和为120  
    echo numP(15,10);   //10~15 的累加和为75  
    echo nump(100);    //5050
    echo nump(100,50);    //3825
    echo numP(50,1);    //1275 
    //
    //**************【PHP标准函数库】**************
    //1、变量函数库   
    // empty()     检查变量是否为空，为空返回true，否则false  语法：empty(变量)下同   
    // gettype()   获取变量的类型
    // is_array()  检查变量是否为数组类型
    // isset()     检查变量是否被设置或赋值
    // unset()     释放给定变量，即注销变量
    // var_dump()  打印变量的相关信息
    //
    $var="";  
    if(isset($var)){
        echo "变量被设置1<br>";  
    }
    unset($var);   
    if(isset($var)){
        echo "变量被设置2<br>";   
    }
    $var = NULL;  
    if(isset($var)){
        echo "变量被设置3<br>";  
    };
    //
    //2、数学函数库   
    // abs()
    // min()
    // sqrt()   平方根
    // max()
    // ceil()   向上取整，大
    // floor()  向下取整，小
    // pi()
    // rand()   随机数
    // is_nan() 判断是否为合法数值 
    // pow()    求次幂
    // round()  对浮点数进行四舍五入
    // fmod() 
    //
    //**********【自定义函数总结与实验】************
    //抽奖：  
    echo "本次抽奖奖项：<br>";  
    echo "Array<br>(<br>";
    $arr=array('200元','1000元','5000元','8000元','10000元','15000元','20000元','30000元','50000元','80000元');   
    foreach($arr as $k => $v){
        echo "[".$k."] "."=>"." ".$v."<br>";   
    };  
    echo ")<br>";  
    $a=rand(0,9);    
    echo "恭喜你抽到：".$arr[$a]."<br>";     
    //
    //
    //*************【日期和时间分函数】**************
    //3、时间日期函数库   
    // date         获取时间
    // time         返回千年虫,秒   
    // strtotime    返回指定时间的，时间戳
    // checkdate    格式化指定时间戳
    //
    date_default_timezone_set("PRC");  
    echo date("Y/m/d H:i:s")."<br>";   
    //
    echo time()."<br>"; 
    echo strtotime("2021-7-31")."<br>";
    $timer = strtotime("2021-7-31")-time();  
    echo "还有：".ceil($timer/60/60/24) ."天<br>";  
    //





?>