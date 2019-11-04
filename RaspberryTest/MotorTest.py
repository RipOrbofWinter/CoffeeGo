import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BOARD)

DcMotorLF = 11
DcMotorLR = 12

GPIO.setup(DcMotorLF, GPIO.OUT)
GPIO.setup(DcMotorLR, GPIO.OUT)

while True:
    GPIO.output(DcMotorLF, GPIO.HIGH)
    #GPIO.output(DcMotorLR, GPIO.LOW)
    
    #time.sleep(0.5)
    
    #GPIO.output(DcMotorLF, GPIO.LOW)
    #GPIO.output(DcMotorLR, GPIO.HIGH)
    
    #time.sleep(0.5)