alert("我是外部链入式JS样式")

//用户输入姓名
var myname = prompt('请输入您的名字');
//显示信息
alert('你好'+myname);



// 让用户输入内容的
prompt('请输入您的年龄！');

// alert 弹出警示框,输出展示给用户的
alert('ji suan de jie guo shi:');

// console 控制台输出，给程序员测试用的
console.log('it is string  is s only Coderman  to see!!');

// 1、声明一个叫age的变量
var age;
// 2、赋值，把数值存进内存空间。
age = 18;
//3、输出结果
console.log(age);
//4、变量的初始化
var myname = 'Steven';
console.log(myname);
myname = 'Leonardo';
console.log(myname);

var myname = '旗木卡卡西',
    address = '火影村',
    age = 30,
    email = 'kakaxi@itcast.cn',
    gz = 2000;

console.log(myname)
console.log(address)
console.log(age)
console.log(email)
console.log(gz)

// 【函数声明的特殊情况】
//3.1声明变量的特殊情况，只声明不赋值，结果是？
//程序不知道里面存的是什么，所以结果是undefined，为定义的。
var sex;
console.log(sex);  //undefined

//3.2 变量未声明也未赋值，直接使用呢？？
//不声明不赋值，直接使用某个变量，会报错！
/*
console.log(tel); 
*/


//3.3不声明直接赋值，会怎样？？
//是可以使用的，
qq = 110;
console.log(qq); 

//【变量命名规范】
// 1、由字母、数字、下划线、美元符号、组成，如： usrAge, num01, _name  
// 2、严格区分大小写，var app; 和 var App; 是两个变量。
// 3、不能以数字开头。18age是错误的，
// 4、不能是关键字、保留字。例如：var , for , while ,
// 5、表两名必须有意义。 MMD ，BBD，  nl   age  
// 6、遵循驼峰命名法。首字母小写，后面单词首字母大写。 myFirstName  
// 7、推荐翻译网站: 有道  爱词典，