#include<stdio.h>
int main()
{
    int n,i;
    printf("请输入整数：");
    scanf("%d",&n);
    printf("%d=",n);
    
    for(i=2;i<=n;i++)  //2< i <n
    {
        while(n%i == 0)   //判断整除，不能整出就不参与循环。
        {
            printf("%d",i); //可以整除，就打印
            
//          n/=i;    //n = n/i;效果相同
            
            n = n/i;  //相当于用新的除数，代替n再循环
            if(n!=1) printf("*");  //如果因数没有除尽，就打印*号，并继续循环，
        }
    }
    
    printf("\n");
    return 0;
}
