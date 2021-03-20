#include<stdio.h>
int main( void ) 
{
    int a,b,c,m,t;    //预设4个整形
    printf("请输入两个数：\n");   
    scanf("%d%d",&a,&b);     //将键盘输入的两个数赋值给a,b
    if(a<b)
    {
        t=a;
        a=b;
        b=t;
    }
    m=a*b;          //a与b的乘积
    c=a%b;          //余数赋值给c
    while(c!=0)         //如果c不等于零,执行循环
    {
        a=b;        
        b=c;
        c=a%b;          //继续取余数赋值给c,如果等于0停滞循环
    }
    printf("最大公约数是：\n%d\n",b);
    printf("最小公倍数是：\n%d\n",m/b);    //(a*b)/(余数)
}
