row = 8
space = 2 * row - 2
for i in range(row):
    for j in range(space):
        print(end=' ')
    space -= 1
    for k in range(0,i+1):
        print('*#= ',end="")
    print()
space = row -2
for i in range(row,-1,-1):
    for j in range(space,0,-1):
        print(end=" ")
    space += 1
    for j in range(0,i+1):
        print("*#= ",end='')
    print()