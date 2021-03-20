#include<stdio.h>
int main()
{
    int n;
    printf("请输入一个正整数：\n");
    while(~scanf("%d",&n))
    {
        int k;//k代表质数
        for(k=2;k<n;k++)//给k值赋值一个最小的质数2
        {
            while(n!=k)  //当K不等于零时可循环
            {
                if(n%k==0)  //找到一个因数
                {
                    printf("%d*",k);  //找到后直接打印
                    n=n/k;   //
                }
                else   break;//如果不能整除，那么就让k++（先跳出while循环再k++） 
            }
        }
        printf("%d\n",n);
    } 
    return 0;
}
