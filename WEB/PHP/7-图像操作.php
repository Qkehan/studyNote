<?php
    /*
    header("Content-type:text/html;charset=utf-8");
    
    echo '欢迎您！！';
    date_default_timezone_set('PRC');  
    echo date("Y-m-d H:i:s")."<br>";  
    echo '【7-图像操作】'."<br>"; 
    echo "当前文件的路径为：".__FILE__.'<br><hr>';    //获取当前文件路径  
    */
    //
    //
    //**********************[创建图像]*********************/
    //在PHP中GD库的操作都是在内存中处理的,操作完成后再以数据流的方式输出到浏览器或者保存到服务器磁盘中.   
    //创建一个图像需要经过四个步骤:    
    //1.创建画布   
    //2.绘制图像  
    //3.输出图像  
    //4.释放资源  
    //下面我们来分别学习这些步骤.打开20多个函数!!!!!
    //
    //-------------1.创建画布-------------------
    //  imagecreate($x_size,$y_size)            --创建一个基于普通天色版的图像,通常支持256色.    
    //  imagecreatetruecolor($x_size,$y_size)   --可以创建一个真彩图像,但是该函数不可以用于GIF格式图像.   
    //以上两个函数都可以创建一张画布,成功都会返回一个资源句柄,失败则返回FALSE.不同的是它们可以容纳的色彩范围不同,  
    //
    //--------------2.图像输出------------
    //为了保持兼容,我们需要在程序中使用header()来指浏览器以什么形式输出类型,它的语法:   
    //   header($string, $replace=true, $http_response_code);    //报头(包头内容,是否替换原报头(可选), 指定HTTP状态码(可选))    
    //
    //-------------3.设置颜色----------------
    //画画需要彩笔--设置颜色  
    //在PHP中通过imagecolorallocate()来设置颜色,它的语法:  
    //  imagecolorallocate($image, $red, $green, $blue);   //函数名(图像句柄,r,g,b);   
    //
    //--------------4.区域填充----------------
    //区域填充可以用来绘制颜色.它可以将一个已经在图像中大面积的颜色很方便的替换为别的颜色.在PHP中通过imagefill()来执行区域填充.   
    //imagefill()会将与(x, y)点处颜色相同并且相邻的颜色替换为$color设置的颜色.      
    //  imagefill($image, $x, $y, $color);   //函数名($image, $x, $y, 替换颜色);   
    //
    //--------------5.绘制点&&线----------------
    //在PHP中,我们可以通过imagesetpixe()来绘制一个像素点,它的语法:    
    //  imagesetpixel($image, $x, $y, $color);      
    //
    //在PHP中我们使用imageline()来绘制一条直线.  
    //imageline()函数看起来参数比较多,其实也是很容易理解的,语法:    
    //  imageline($image, $x1, $y1, $x2, $y2, $color);   //函数名(图像句柄,起始点坐标xy,结束点坐标xy,颜色);   
    //
    //---------------6.绘制矩形------------------
    //  imagerectangle($image, $x1,$xy1, $x2,$y2, $col);        --用来绘制一个矩形  
    //  imagefilledrectangle($image, $x1,$xy1, $x2,$y2, $col);   --用来绘制一个矩形并填充  
    //
    //---------------7.绘制多边形-------------------
    //在PHP中我们可以使用imagepolygon()来绘制多边形,例如三角形,五边形,八边形. 
    //也可以使用imagefilldpolygon()来绘制填充多边形,语法:  
    // imagepolygon($image, $point, $num_points, $color);   
    // imagefilledpolygon($image, $point, $num_points, $color);  
    //
    //
    //-----------------8.绘制椭圆-----------------
    //在PHP中可以使用imageellipse()来绘制一个椭圆,使用imagefilledellipse()绘制并填充椭圆,它们的语法:    
    // imageellipse($image, $cx,$cy, $cw,$ch, $color)    
    // imagefilledellipse($image, $cx,$cy, $cw,$ch, $color) 
    //
    //
    //
    //
    //******************************[在图像上绘制文字]*************************
    //在PHP中除了可以在画布上绘制图像以外,还可以将文字绘制在画布上.我们通常会使用如函数,将文字绘制在图像上:   
    // imagestring()    --水平绘制一行字符串
    // imagestringup()  --垂直绘制一行字符串
    // imagechar()      --水平绘制一个字符
    // imagecharup()    --垂直绘制一个字符
    // imagettftext()   --用TrueType字体想图像写入文本   
    //
    //
    //----------------------1.在图像上绘制文字-----------------------
    //四个函数的参数都相同, $font可以为 1\2\3\4\5, 代表使用内置字体. 
    //如果想使用其他字体则可以使用 imageloadfont() 来载入新字体. 
    //imagettftext()返回一个保存了输出文本四个角的坐标的数组.   
    //
    //以上函数的语法:    
    //
    //  imagestring($image, $font, $x,$y, $s, $color);   
    //imagestring(图像句柄, 字体, $x,$y, 字符串, 颜色);   
    //
    //  imagettftext($image, $size, $angle, $x,$y, $color, $fontfile, $text);   
    //imagettftext(图像句柄, 字体大小, $字符串角度, $x,$y, $color, 字体文件名, 字符串);      
    //
    //
    //
    //
    //***********************[通过GD库生成验证码]*********************
    // 创建画布 -> 随机绘制字符 -> 绘制干扰元素 -> 输出图像到浏览器 -> 释放资源  
    //
    //
    //
    //
    //
    //
    //
    header("Content-type:image/png");   
    // 画布大小
    $pngX = 800;
    $pngY = 800;
    $im = imagecreate($pngX,$pngY);    
    //画布随机色    
    imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));  //蓝色背景  
    //循环  
    for($i = 0; $i < 8; $i++){
        //写一个循环,让线的颜色位置随机出现  
        $color = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));    //将RGB换成了rand随机数  
        //随机彩色点点   
        for($j = 0; $j < $i/2; $j++){
            imagesetpixel($im, rand(0,$pngX),rand(0,$pngY), $color); 
        };
        //线条 
        imageline($im, rand(0,$pngX),rand(0,$pngY), rand(0,$pngX),rand(0,$pngY), $color);  
        //矩形    
        imagerectangle($im, rand(0,$pngX),rand(0,$pngY), rand(0,$pngX),rand(0,$pngY), $color);   
        //椭圆与正圆
        imageellipse($im, rand(0,800),rand(0,800), rand(0,800),rand(0,800), $color);   
    };
    imagestring($im, 5, 50,50, "i like php", $color);  
    imagepng($im);   //输出图像  
    imagedestroy($im);    //注销图像  

    //自动刷新页面  
    
    


?>