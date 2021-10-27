import os
ip = []

for i in range(255):
    result = os.system(f"ping -c 1 -w2 192.168.43.{i}")
    if result == 0:
        ip.append("192.168.43.{}".format(i))
print(ip)
