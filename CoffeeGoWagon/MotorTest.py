import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BOARD)

DcMotorLF = 11
DcMotorLR = 12

while True:
    GPIO.setmode(GPIO.BOARD)
    GPIO.setup(DcMotorLF, GPIO.OUT)
    GPIO.output(DcMotorLF, GPIO.HIGH)
    GPIO.setup(DcMotorLR, GPIO.IN)
    
    time.sleep(0.5)
    
    GPIO.cleanup()
    GPIO.setmode(GPIO.BOARD)
    
    GPIO.setup(DcMotorLF, GPIO.IN)
    GPIO.setup(DcMotorLR, GPIO.OUT)
    GPIO.output(DcMotorLR, GPIO.HIGH)
    
    GPIO.cleanup()
    
    time.sleep(0.5)