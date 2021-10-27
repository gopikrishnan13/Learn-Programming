#include <stdio.h>
int factorial(int n) {
    return n*(n-1);
}

int main(){
    int n;
    int ans=1;
    scanf("%d",&n);
    // for(int i=1;i<=n;i++){
    //     last[i]=i*(i-1);
    //     printf("%d\n",last[i]);
    // }
    for (int i = 1; i <=n; i++){
        ans=ans*i;   
    }
    printf("%d",ans);
}