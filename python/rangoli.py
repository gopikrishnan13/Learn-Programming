import string
#N = int(input("Size: "))
N = 5
if 27 > N :
    Str = string.ascii_lowercase[0:N:1]
    fstr = "".join(reversed(Str))
    lstr = Str[1:N:1]
    
    centerStr = ""
    count = len(fstr+lstr)-1
    for i in fstr+lstr:
        centerStr = centerStr+i+'-' if count else centerStr+i
        count -= 1
    
    
    