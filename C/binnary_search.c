#include <stdio.h>

int binnarySearch(int *arr, int target, int start,int end)
{
    while(start <= end)
    {
        int mid = start + (end - start) / 2;
        
        if(target == arr[mid]) return mid;


        if(target < arr[mid]) 
            end = mid - 1; 
        else 
            start = mid + 1;

    }
    return -1;
}

int main()
{
    int arr[] = {1,2,3,4,5,6,7,8,9,10};
    int size = sizeof(arr)/sizeof(arr[0]);
    int target = 5;
    printf("\nindex of %d is %d\n", target, binnarySearch(arr, target, 0, size));
}