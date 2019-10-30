import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BOARD) # GPIO Numbers instead of board numbers

DCMOTORLF = 31
DCMOTORLR = 33
DCMOTORRF = 35
DCMOTORRR = 37
    
GPIO.setup(DCMOTORLF, GPIO.OUT) # GPIO Assign mode
GPIO.setup(DCMOTORLR, GPIO.OUT) # GPIO Assign mode
GPIO.setup(DCMOTORRF, GPIO.OUT) # GPIO Assign mode
GPIO.setup(DCMOTORRR, GPIO.OUT) # GPIO Assign mode

while True:
    GPIO.output(DCMOTORLF, GPIO.LOW) # out
    #GPIO.output(DCMOTORLF, GPIO.HIGH) # on

    GPIO.output(DCMOTORLR, GPIO.LOW) # out
    #GPIO.output(DCMOTORLR, GPIO.HIGH)
    
    GPIO.output(DCMOTORRF, GPIO.LOW) # out
    #GPIO.output(DCMOTORRF, GPIO.HIGH) # on
    
    GPIO.output(DCMOTORRR, GPIO.LOW) # out
    #GPIO.output(DCMOTORRR, GPIO.HIGH) # on
    
    time.sleep(0.5)
    
    #GPIO.output(DCMOTORLF, GPIO.LOW) # out
    GPIO.output(DCMOTORLF, GPIO.HIGH) # on
    
    #GPIO.output(DCMOTORLR, GPIO.LOW) # out
    GPIO.output(DCMOTORLR, GPIO.HIGH) # on

    #GPIO.output(DCMOTORRF, GPIO.LOW) # out
    GPIO.output(DCMOTORRF, GPIO.HIGH) # on

    #GPIO.output(DCMOTORRR, GPIO.LOW) # out
    GPIO.output(DCMOTORRR, GPIO.HIGH) # on
    
    time.sleep(0.5)