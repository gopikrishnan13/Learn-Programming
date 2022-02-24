#include <stdio.h>
#include<stdlib.h>

int bs(int*, int, int, int);

int main()
{
    int arr[20] = {10,20,30,40,50,60,70,80,90,100};
    printf("result : %d\n", bs(arr, 100, 0, 9));
}

int bs(int* arr, int target, int start, int end)
{
    if(start > end)
    {
        return -1;
    }

    int mid = start + (end - start) / 2;
    printf("mid = %d\n", mid);

    if(target == arr[mid])
    {
        return mid;
    }

    if(target < arr[mid])
    {
        return bs(arr, target, start, mid -1);
    }

    return bs(arr, target, mid + 1, end);
}