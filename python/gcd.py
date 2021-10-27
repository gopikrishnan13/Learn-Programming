def gcd(a,b,c): #function to find gcd number it's have to must be two prameters
    while(c != 0): #create a loop for divison
        c = a%b if a > b else b%a # c = bigNumber % smallNumber , am use condtion statemate 
        (a,b) = (a%b,b) if a>b else (a,b%a) #tuple(a,b) = bigNumber % smallNumber 
    return (a,b) [a==0] #return answer

if __name__ == "__main__" :
    (a,b) = (int(input("Entre A value: ")),int(input("Entre B value: "))) #get user input via tuple method and store it a,b
    print("The greatest common divisor of {} and {} is :{}".format(a,b,gcd(a,b,None))) #print result by calling gcd()function and pass a,b,None


