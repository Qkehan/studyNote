#include <stdio.h> 

void main()

{  

int k=2;     

switch(k)    

{  

case 1:printf("%d\n",k++);   break;   

case 2:printf("%d ",k++);   

case 3:printf("%d\n",k++);  break;    

case 4:printf("%d\n",k++);     

default:printf("Full!\n");     

} 

} 
