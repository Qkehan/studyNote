#include<stdio.h>
#include<math.h>

double fact(int n)  //函数声明
{
    int i;
    int sum=1;
    for(i=1;i<=n;i++)
	{
        sum = sum * i;
    }
    return sum;
}
int main()
{
		int n = 0,
			m = 0,
			k = 0,//临时变量 
			c = 0;//所求组合数 
	printf("请输入n和m的值\n");
    
	scanf("%d,%d",&n,&m);
	k = fact(m - n); 
	n = fact (n);//求n的阶乘，再把阶乘值赋予n自己
	m = fact (m);//求m的阶乘，再把阶乘值赋予m自己
	k = n * k;
	c = (m / k) ; 
	printf("所求组合数值为：%d\n",c);
}
