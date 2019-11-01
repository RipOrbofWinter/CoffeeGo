import time
import serial
ser = serial.Serial('/dev/ttyACM2', 9600)
ser.write(b'3')
ser.write(b'5')
ser.write(b'7')

counter=0
while True:
    int_encode = b'%d' %counter
    ser.write(int_encode)
    counter += 1
    
    if(ser.in_waiting >0):
        line = ser.readline()
        print(line)
    time.sleep(0.5)
