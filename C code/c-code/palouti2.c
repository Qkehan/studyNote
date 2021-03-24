#include<stdio.h>
int f(int n){
    n++;
    int i;
    int table[n];  //存储台阶数为n时爬楼梯的类别数
    for(i=0;i<n;i++)
    table[i]=0;
        
    table[1]=1;
    table[2]=2;
    table[3]=4;
    for(i=4;i<n;i++)
    {
        table[i]=table[i-1]+table[i-2]+table[i-3];
    }
    return table[n-1];
}

int main(){
    int n;
	printf("请输入台阶数:\n");
	scanf("%d", &n);
    printf("%d\n",f(n));
    
    return 0;
}
