#include <stdio.h>
float average(float x,float y,float z)
{
    float aver;
    aver=(x+y+z)/3;
    return(aver);
}

float main()
{
    float a,b,c,ave;
    printf("请输入三个数字来计算平均值（用空格或回车隔开）：\n");
    scanf("%f %f %f",&a,&b,&c);
    
    ave=average(a,b,c);
    printf("平均值=%f\n",ave);
}
