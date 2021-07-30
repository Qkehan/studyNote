<?php
    function yzm(){
        header("Content-type: image/png");   
        //随机颜色画布  
        $im = imagecreate(100,30);  
        imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));  

        //自定义画笔颜色   
        $color = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));  
        
        for($i=0;$i<=4;$i++){
            $text = rand(0,9);  
            $x = ($i*25)-18;   
            $color = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));  
            imagestring($im, 5, $x,5, $text, $color);  
        }
        imagepng($im);   
        imagedestroy($im);  
    }
    yzm();  
    
?>

