#include<stdio.h>
int f(int n){
    switch(n){
        case 1:
            return 1;
        case 2:
            return 2;
        case 3:
            return 4;
        default:
            return f(n-1)+f(n-2)+f(n-3);
    }
}
int main(){
    printf("%d\n",f(24));
    return 0;
}
