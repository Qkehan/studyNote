#include<stdio.h>
int main()
{
    int i,j,equal;
    printf("乘法口诀表：\n");
    for(int i=1;i<10;i++)
    {
        for(j=1;j<=i;j++)
        {
            equal = i*j;
            printf("%d*%d=%-3d",j,i,equal);
        }
        printf("\n");
    }     
}
