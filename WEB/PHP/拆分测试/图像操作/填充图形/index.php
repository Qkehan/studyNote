<?php
    header("Content-type: image/png");  
    $im = imagecreate(400,200);   
    imagecolorallocate($im, 0,0,255);    
    $color = imagecolorallocate($im,255,0,255);  

    imagefilledellipse($im, 100,100, 80,80, $color);     

    imagefilledrectangle($im, 200,50, 300,150, $color);  

    imagepng($im);  
    imagedestroy($im);  




?>