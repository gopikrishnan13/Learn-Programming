a = [123]

def swap(arr):
    numSwap = 0
    swap = 0
    if(len(arr) > 0):
        for i in range(len(arr)):
            for j in range(len(arr)-1):
                if(arr[j] > arr[j+1]):
                    arr[j],arr[j+1] = arr[j+1],arr[j]
                    numSwap = numSwap +1
                else:
                    pass
    print(numSwap)
    
    return arr

print(swap(a))
