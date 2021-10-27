#simple socket message 
import socket as s
import sys

sck = s.socket(s.AF_INET, s.SOCK_STREAM)
sck.setsockopt(s.SOL_SOCKET, s.SO_REUSEADDR, 1)

HOST = "0.0.0.0" 
PORT = 1234

try :
    sck.bind(('',PORT))
    print(f"Sokcet bind successfully on {PORT}")
    sck.listen()
    print("Waiting for connection>>>")
    conn , address = sck.accept()
    print(f"Connection from : {address}")
except s.error as err:
    print(f"Error : {err}")
    exit()

try:
    conn.sendall("YOU ARE IN PRIVATE MESSAGE MODE > \n SEND A MESSAGE :) \n".encode())
    data = conn.recv(1024)
    while data:
        if(data.decode().startswith("exit()")):
            conn.sendall("ok bye :)".encode())
            conn.close()
            print("Conncetion closed.../")
            exit()
        print(data.decode(),end="")
        data = conn.recv(1024)

except s.error as err:
    print(f"error: {err}")