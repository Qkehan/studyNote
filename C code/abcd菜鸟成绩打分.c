#include<stdio.h>

int main()
{
    int s,sum;
    printf("请输入成绩：");
    scanf("%d",&sum);
    s = (sum>=90)?'A':((sum>=75)?'B':(sum>=60)?'C':'D');
    printf("%c\n",s);  //%c字符格式
    return 0;
}
