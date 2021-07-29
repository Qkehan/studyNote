<?php
    header("Content-type:image/png");    //声明画布为图片     
    //$im = imagecreate(400,300);     //普通画布
    //imagecolorallocate($im, 0,0,255);   //画布颜色蓝色   普通画布颜色  
    
    $im = imagecreatefromjpeg("image/2.jpg");  //图片画布   


    $color = imagecolorallocate($im,255,126,57);  //自定义画笔颜色   

    imagefilledellipse($im, 150,50, 25,25, $color);   
    imagestring($im,5,50,50,"php",$color);  

    $font = "font/yzq.ttf";    //成功了   
    $text = "你好PHP绘图";  
    imagettftext($im, 36,0, 200,200, $color, $font, $text);   
    imagejpeg($im);    
    imagedestroy($im);   


?>