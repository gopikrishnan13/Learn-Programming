#This for only send msg to node from multiple user
from os import terminal_size
import socket as s
from threading import Thread
import mimetypes as m

http_resp_template = """
HTTP/1.1. 200 OK
content-type: {type}
Content-length: {length}
server: ECS (nyb/1D1F)
vary: Accept-Encoding
x-cache: HIT

{body}
"""

htdoc = "/var/www/html/"

class socketThread(Thread):
    def __init__(self,conn,addr):
        Thread.__init__(self)
        self.conn = conn
        self.addr = addr
        print(f"Thread {addr[0]} : {addr[1]} ")

    
    def run(self):
        data = self.conn.recv(4096).decode()
        request_line = data.split('\n')[0]
        f = request_line.split(' ')[1]
        if f == "/":
            f = "index.html"
        f = htdoc + f
        with open(f, 'r') as file:
            body = file.read()
        self.conn.sendall(http_resp_template.format(type = m.guess_type(f),length = len(body)+10,body = body ).encode('utf-8'))
        self.conn.close()

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