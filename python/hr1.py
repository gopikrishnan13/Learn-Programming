# l = [0,1,3,5]
# for i in range(1, 4):
#     s = '.|.' * l[i]
#     print(f"{s}".center(21,'-'))
# print("WELCOME".center(21,'-'))
# for i in range(1, 4):
#     s = '.|.' * l[i]
#     print(f"{s}".center(21,'-'))
def printSym(N,M):
    count = -1
    N = int(N//2)
    for i in range(N):
        count += 2
        Str = '.|.' * count
        print(f"{Str}".center(M,'-'))
    count += 2
    print("WELCOME".center(M,'-'))
    for i in range(N):
        count -= 2
        Str = '.|.' * count
        print(f"{Str}".center(M,'-'))

N,M = map(int, input().split())

if( (0 < N and 1 == N%2) and (N * 3 == M) ):
    printSym(N,M)