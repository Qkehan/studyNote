



//左右缓动动画函数      
function animateX(obj, target, callback){
    //清除多余定时器   
    clearInterval(obj.moveDiv);  
    
    obj.moveDiv = setInterval(function(){
        //缓动动画步长值   
        var step = (target - obj.offsetLeft) / 10;   
        //把步长值改为整数，不要出现小数的问题  
        //up运动时，五入取整，down运动时，四舍取整，往小取      
        step = step > 0 ? Math.ceil(step) : Math.floor(step);  

        if(obj.offsetLeft == target){
            clearInterval(obj.moveDiv);  
            //回调函数   
            /*   
            if(callback){
                //是否有callbac传进来，有的话调用函数   
                callback();   
            };
            */   
            callback && callback();   //回调函数的  优化写法   
        };
        obj.style.left = obj.offsetLeft + step + 'px';   //移动距离的值会一次次递减，形成减速   
        
        // obj.innerHTML = obj.offsetLeft;  //显示位置像素  
    },20);
};    






//上下缓动动画函数      
function animateY(obj, target, callback){
    //清除多余定时器   
    clearInterval(obj.moveDiv);  
    
    obj.moveDiv = setInterval(function(){
        //缓动动画步长值   
        var step = (target - window.pageYOffset) / 10;   
        //把步长值改为整数，不要出现小数的问题  
        //up运动时，五入取整，down运动时，四舍取整，往小取      
        step = step > 0 ? Math.ceil(step) : Math.floor(step);  

        if(window.pageYOffset == target){
            clearInterval(obj.moveDiv);  
            //回调函数   
            /*   
            if(callback){
                //是否有callbac传进来，有的话调用函数   
                callback();   
            };
            */   
            callback && callback();   //回调函数的  优化写法   
        };
        // obj.style.top = window.pageYOffset + step + 'px';   
        moveY = window.pageYOffset + step;   //移动距离的值会一次次递减，形成减速   
        window.scroll(0, moveY);    
        
        // obj.innerHTML = obj.offsetLeft;  //显示位置像素  
    },20);
};   



