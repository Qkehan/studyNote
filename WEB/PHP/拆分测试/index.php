<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=no" />
    <title>AnyDoor</title>
    <style>
        *{
            margin: 0;  
            padding: 0;
        }
        
        :root{
            --tabBar:       #a77cc4;  
            --bg:           #614f8b;
            --white:        #ffffff;  
            --shadow:       rgb(79,49,94);  
            --yellow:   rgb(255, 201, 52);  
        }

        @media screen and (max-width:600px){
            .tabBar{
                width: 100%;  
                height: 66px;  
                background-color: var(--tabBar);
                position: fixed;   
                bottom: 0px;  
                box-shadow: -5px -5px 8px var(--shadow);

                font-size: 40px; 
                font-weight: bold;  
                color: var(--white);  
                line-height: 66px;
                text-shadow: -3px -3px 8px var(--shadow);
            }
            body{
                padding-bottom: 66px;  
            }
        }
        @media screen and (min-width:600px){
            .tabBar{
                /* position: fixed;    */
                width: 100%;  
                height: 100px;
                background-color: var(--tabBar);
                position: fixed;
                top: 0px;   
                box-shadow: 5px 5px 8px var(--shadow);  

                font-size: 48px; 
                font-weight: bold;  
                color: var(--white);  
                line-height: 100px;  
                text-shadow: 5px 5px 8px var(--shadow); 
            }
            body{
                padding-top: 100px;
            }
        }


        body{
            background-color: var(--bg);
            text-align: center;
            color: var(--shadow);

            
        }
        body div{
            float: left;
        }
        body div div{
            width: 145px;  
            height: 145px;  
            border-radius: 20px;  
            background-color: var(--yellow);   

            display: flex;   
            flex-direction: column;   
            justify-content: center; 

            font-size: 20px;  
            font-weight: bold;
            text-shadow: 2px 2px 5px var(--shadow);  
        }
        .list{
            margin: 25px;
            box-shadow: 5px 5px 8px var(--shadow); 
        }

        h1{
            color: #ffffff;
        }
        
    </style>
</head>

<body>
    <div class="tabBar">AnyDoor</div>

    

    <div>
        <h1>按钮</h1>
        <div class="list" onclick="window.open('../AnyDoor/demo/botton/层叠展开按钮.html','_blank')">层叠转开按钮</div>
        <div class="list" onclick="window.open('../AnyDoor/demo/botton/动效按钮.html','_blank')">动效按钮</div>
        <div class="list" onclick="window.open('../AnyDoor/demo/botton/流光按钮.html','_blank')">流光按钮</div>
    </div>

    <div>
        <h1>动画</h1>
        <div class="list" onclick="window.open('../AnyDoor/demo/animation/卡通字动画.html','_blank')">卡通字体动画</div>
        <div class="list" onclick="window.open('../AnyDoor/demo/animation/蓝色光圈.html','_blank')">蓝色光圈</div>
        <div class="list" onclick="window.open('../AnyDoor/demo/animation/马赛克动画.html','_blank')">马赛克动画</div>
        <div class="list" onclick="window.open('../AnyDoor/demo/animation/黏连动画.html','_blank')">黏连动画</div>
        <div class="list" onclick="window.open('../AnyDoor/demo/animation/跳动字体.html','_blank')">跳动字体</div>
        <div class="list" onclick="window.open('../AnyDoor/demo/animation/炫光一.html','_blank')">炫光一</div>
        <div class="list" onclick="window.open('../AnyDoor/demo/animation/炫光二.html','_blank')">炫光二</div>
        <div class="list" onclick="window.open('../AnyDoor/demo/animation/折叠字体.html','_blank')">折叠字体</div>
    </div>

    <div>
        <h1>导航栏</h1>
        <div class="list" onclick="window.open('../AnyDoor/demo/navbar/侧滑导航.html','_blank')">侧滑导航</div>
        <div class="list" onclick="window.open('../AnyDoor/demo/navbar/滑动导航.html','_blank')">滑动导航</div>
        <div class="list" onclick="window.open('../AnyDoor/demo/navbar/滑动悬停菜单.html','_blank')">滑到悬停导航</div>
        <div class="list" onclick="window.open('../AnyDoor/demo/navbar/下拉导航.html','_blank')">下拉导航</div>
    </div>

    <div>
        <h1>php</h1>
        <div class="list" onclick="window.open('../php/book/index.php','_blank')">图书查询</div>
        <div class="list" onclick="window.open('../php/news/index.php','_blank')">新闻管理</div>
    </div>

    <br><br><br><br><br><br>
    <h2>Qkehan AnyDoor</h2>
    <br><br><br>


    
</body>
</html>