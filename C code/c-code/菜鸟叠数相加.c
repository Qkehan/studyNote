#include<stdio.h>

int main()
{
    int t=0,i,a,n; //n为位数，也为计数器
    printf("请输入数字a，与位数n：\n");
    scanf("%d%d",&a,&n);
    for(i=n;i>=0;i--)  //用位数自减来来循环
    {
        if(i == 0) //计数器归零停止循环
        {
            printf("a+aa+...=%d\n",t);
            return 0;
        }
        t = t + a;  //每次生成的数字叠加
        a = (a%10) + (a*10);  //生成每次算法的数字，进10位加个位，并赋值给自己。
    }
}
