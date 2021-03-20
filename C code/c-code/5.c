#include<stdio.h>
int gcd(int m,int n);
int lcd(int m,int n);

void main()
{
    int a,b;
    printf("input a and b:\n");
    scanf("%d%d",&a,&b);
    printf("%d 和 %d \n最大公约数为:%d\n",a,b,gcd(a,b));
    printf("最小公倍数为:%d\n",lcd(a,b));
}

int gcd(int m,int n)
{
    int t;
    if(m<n)
    {
        t = m;
        m = n;
        n = t;
    }
    while(n != 0)
    {
        t = m%n;
        m = n;
        n = t;
    }
    return m;
}

int lcd(int m,int n)
{
    int t;
    t = m%n/gcd(m,n);
    return t;
}
