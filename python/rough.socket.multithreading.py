#This for only send msg to node from multiple user
from os import terminal_size
import socket as s
from threading import Thread

class socketThread(Thread):
    def __init__(self,conn,addr):
        Thread.__init__(self)
        self.conn = conn
        self.addr = addr
        print(f"Thread {addr[0]} : {addr[1]} ")

    
    def run(self):
        self.conn.sendall("Welcome to sample group chat:\n".encode())
        data = self.conn.recv(1024).decode()
        while data:
            if(data.startswith("exit()")):
                self.conn.sendall("exiting.../".encode())
                print(f"{self.addr[0]} connection is closed")
                self.conn.close()
                exit()
            else:
                print(f"{self.addr[0]}: {data}",end="")
                data = self.conn.recv(1024).decode() 

HOST = "0.0.0.0"
PORT = 1234

sck = s.socket(s.AF_INET, s.SOCK_STREAM)
sck.setsockopt(s.SOL_SOCKET,s.SO_REUSEADDR,1)

try:
    sck.bind(('',PORT))
    print(f"Socket bind on {PORT}")
    sck.listen()
    print("Wating for new connction")
    while True:
        conn, addr = sck.accept()
        print(f"connection recived from {addr}")
        socketThread(conn,addr).start()
    

except s.error as err:
    print(f"ERROR: {err}")