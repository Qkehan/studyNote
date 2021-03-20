#include<stdio.h>
 
int main()
{
    int i,j;
    j = 0;
    for(i=0;i<500;i++)
    {
        printf("%d、%-5c",i,i);
        j++;
        if(j%20 == 0) printf("\n");
    }
    return 0;
}

//特殊符号打印
