from threading import Thread

def cube(num):
    print(f"cube: {num*num*num}",end="\n")
    return 0

def squre(num):
    print(f"squre: {num*num}",end="\n")
    return 0

if __name__ == "__main__":
    while True:
        num = int(input("Entre a number: "))
        if(777 == num):
            break
        else:
            t1 = Thread(target=cube,args=(num,))
            t2 = Thread(target=squre, args=(num,))
            t1.start()
            t2.start()
            t1.join()
            t2.join()
    
    print("done>>>>")