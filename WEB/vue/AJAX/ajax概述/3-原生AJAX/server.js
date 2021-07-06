//1、引入express   
const { request } = require('express');
const express = require('express');    

//2、创建应用对象   
const app = express();   

//3、创建路由规则   
// request 是对请求报文的封装  
// response 是对响应报文的封装  
app.get('/server', (request, response)=>{   //(函数形参， 函数形参)
    //设置响应头 设置允许跨域  
    response.setHeader('Access-Control-Allow-Origin','*');   
    //设置简单响应  
    response.send('hello AJAX!');  
});  

// all可以接受任意类型的请求   
app.all('/server', (request, response)=>{   //(函数形参， 函数形参)
    //设置响应头 设置允许跨域  
    response.setHeader('Access-Control-Allow-Origin','*');   //星号*表示所有类型的头信息，都能接受。  
    //设置特殊响应头、并将POST改为all。       
    response.setHeader('Access-Control-Allow-Headers','*');  
    //设置简单响应  
    response.send('hello AJAX POST!');  
});  

//4、监听端口启动服务   
app.listen(8000, ()=>{
    console.log("服务已启动，8000端口监听中...");  
})
