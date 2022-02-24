#include<stdio.h>

int fib(int n)
{
   if (n <= 1)
      return n;
   return fib(n-1) + fib(n-2);
}
 
int main ()
{
  int y, x=0, z=0, flag=0;
  printf("Enter the value of y: ");
  scanf("%d",&y);
  for(int i = 0; fib(i) <= fib(y); i++){
      x = fib(i);
      z = fib(i+2);
      if(y == fib(i)){
          flag = 1;
          break;
      }
  }
     if(flag){
          printf("\nPRESENT");
     }else {
          printf("\nx = %d z = %x",x,z);
      }


  return 0;
}