#!/user/bin/env python
import mysql.connector
import time
import serial

#setup communication between arduino and raspberry
ser = serial.Serial('/dev/ttyACM0', 9600)


#set up first time connection
con = mysql.connector.connect(user='janhewf317_koffiega', password='KoffieGa09$',host='dyrho.com', port=3306,database='janhewf317_koffiega')

while True:
    #check if connection is still connected
    if con.is_connected() == 0:
        #if connection is gone, reconnect
        con.reconnect(attempts=5, delay = 0)
        
    c=con.cursor()
    c.execute("SELECT * FROM `prototypes` ORDER BY `id`")
    for x in c:
        
        #encode data for sending to arduino
        int_encode = b'%d' % x[1]
        #send it to arduino
        ser.write(int_encode)
        #for y in x:
            #print(y)
    c.execute("DELETE FROM prototypes")
    con.commit()
    time.sleep(10)
con.close()
