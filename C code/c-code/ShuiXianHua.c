#include<stdio.h>
 
int main()
{
    int i,x,y,z;
    for(i=100;i<1000;i++) //100~1000之间的数
    {
        x=i%10;  //个位赋值
        y=i/10%10; //十位赋值
        z=i/100%10;  //百位赋值
        
        if(i==(x*x*x+y*y*y+z*z*z))
        printf("%d\n",i);
        
    }
    return 0;
}
