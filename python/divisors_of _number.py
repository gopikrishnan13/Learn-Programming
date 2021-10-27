def devisorsNumbers(n):
    start,end = 1,n
    result = set()
    while True:
        if(start < end):
            if((n % start) == 0):
                end = n // start
                result.add(start)
                result.add(end)
        else: break
        start = start +1
    return sorted(result)

if __name__ == "__main__":
    num = int(input("Entre a number: "))
    result = devisorsNumbers(num)
    print("The divisor of {} are: {}".format(num,result))
    print("The sum of {} divisors are: {}".format(num,sum(result)))
    print("The lenght of {} divisors are: {}".format(num,len(result)))