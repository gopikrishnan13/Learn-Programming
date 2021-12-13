s = "122"

def b(c):
    l = []
    l.append(c.isalnum())
    l.append(c.isalpha())
    l.append(c.isdigit())
    l.append(c.islower())
    l.append(c.isupper())
    return l

l = [False,False,False,False,False]
for c in s:
    temp = b(c)
    for i in range(5):
        l[i] = True if l[i] else temp[i]


print(l)