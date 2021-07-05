<?php
    header("Content-type:text/html;charset=utf-8");
    
    echo '欢迎您！！';
    echo date("Y-m-d H:i:s")."<br>";  
    echo '【常量和变量】'."<br>";

    //*********************【常量和变量】***********************
    //
    //------【PHP的常量】----------
    // 常量的概念：常量是指在脚本运行过程中，值始终保存不变的量。它的特点是一旦被定义就不能被修改或重新定义。    
    //例如：
    //数字中常用的圆周率π就是一个常量，其值就是固定且不能被改变的。    
    //
    //1、使用define()函数定义常量     
    //语法：  define(string constant_name, mixed value, case_sensitive=true)    
    //  constant_name   必选参数，常量名称，即标识符
    //  value           必选参数，常量的值
    //  case_sensitive  可选参数，指定是否大小写敏感，设定为true，表示不敏感   
    //
    define("CON", "只能看到一次",true);  //默认情况是区分大小写的   
    echo CON.'<br>';
    // echo con.'<br>';   //不推荐使用不区分大小写的常量   
    //
    //2、使用constant()函数获取常量的值   
    //语法：  mixed constant(string const_name)   
    define("CONT", "itcast");
    echo constant("CONT").'<br>';   //itcast   
    //
    //3、使用define()函数判断常量是否已经被定义   
    //语法：  bool define(string constant_name)   
    //
    echo defined('CONT').'<br>';    //1  表示已经并定义，如果未定义不返回值。  
    //
    //4、const关键字   
    //
    const pai = 3.14;
    echo pai.'<br>';   //3.14  
    //
    //使用const关键字来定义了一个名为pai的，值为3.14的常量。  
    //思考： 使用define()函数来定义名为CON的常量，使用constant()函数来获取该常量的值，最后使用defined()函数来判断常量是否已经被定义。    
    //
    //
    //---------------【预定义常量】--------------------  
    //  预定义常量可方便开发人员获取PHP中的信息，需要时直接使用或通过echo输出可以获取相关的信息。    
    //
    //  PHP_VERSION     获取PHP的版本信息，如5.4.38  
    //  PHP_OS          获取解析PHP的操作系统类型，如 WINNT  
    //  PHP_INT_MAX     获取PHP中Integer类型的最大值2147483647    
    //  PHP_INT_SIZE    获取PHP中Integer值的字长，如4  
    //  E_ERROR         表示运行时致命错误，使用1表示   
    //  E_WERNING       表示运行时警告错误（非致命），使用2表示  
    //  E_PARSE         表示解析时解析错误，使用4表示   
    //  E_NOTICE        表示运行时提醒信息，使用8表示  
    //
    echo "当前文件的路径为：".__FILE__.'<br>';    //获取当前文件路径  
    echo "当前行数为：".__LINE__.'<br>';    //查看当前代码行数   
    echo "当前系统：".PHP_OS.'<br>';    //linux  
    echo "当前PHP版本：".PHP_VERSION.'<br>';    //7.3.3   
    echo date("Y-m-d H:i:s").'<br>';     //这个时间是有时差的   
    echo time().'<br>';    //unix时间戳  
    date_default_timezone_set('PRC');   //设置时区   
    echo "北京时间：".date("Y-m-d H:i:s").'<br>';
    //
    //
    //------------------【PHP的变量】----------------------
    //
    //




?>