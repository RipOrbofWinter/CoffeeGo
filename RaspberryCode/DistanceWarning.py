#Libraries
import RPi.GPIO as GPIO
import time
 
#GPIO Mode (BOARD / BCM)
GPIO.setmode(GPIO.BOARD)

#Disable GPIO warnings
GPIO.setwarnings(False)
 
#set GPIO Pins
GPIO_TRIGGER1 = 11
GPIO_ECHO1 = 12
GPIO_TRIGGER2 = 15
GPIO_ECHO2 = 16
GPIO_TRIGGER3 = 21
GPIO_ECHO3 = 22
GPIO_TRIGGER4 = 23
GPIO_ECHO4 = 24

GPIO_BUZZER = 7
 
#set GPIO direction (IN / OUT)
GPIO.setup(GPIO_TRIGGER1, GPIO.OUT)
GPIO.setup(GPIO_ECHO1, GPIO.IN)
GPIO.setup(GPIO_TRIGGER2, GPIO.OUT)
GPIO.setup(GPIO_ECHO2, GPIO.IN)
GPIO.setup(GPIO_TRIGGER3, GPIO.OUT)
GPIO.setup(GPIO_ECHO3, GPIO.IN)
GPIO.setup(GPIO_TRIGGER4, GPIO.OUT)
GPIO.setup(GPIO_ECHO4, GPIO.IN)
GPIO.setup(GPIO_BUZZER, GPIO.OUT)

GPIO.output(GPIO_BUZZER, GPIO.LOW)


distance1 = 0
distance2 = 0
distance3 = 0
distance4 = 0

def distance(TRIGGER, ECHO):
    # set Trigger to HIGH
    GPIO.output(TRIGGER, True)
 
    # set Trigger after 0.01ms to LOW
    time.sleep(0.00001)
    GPIO.output(TRIGGER, False)
 
    StartTime = time.time()
    StopTime = time.time()
 
    times = 0
    # save StartTime
    while GPIO.input(ECHO) == 0 and times < 250:
        StartTime = time.time()
        times = times + 1
 
    # save time of arrival
    while GPIO.input(ECHO) == 1:
        StopTime = time.time()
 
    # time difference between start and arrival
    TimeElapsed = StopTime - StartTime
    
    return TimeElapsed


def sendDistanceSignal():
    delay1 = distance(GPIO_TRIGGER1, GPIO_ECHO1)
    delay2 = distance(GPIO_TRIGGER2, GPIO_ECHO2)
    delay3 = distance(GPIO_TRIGGER3, GPIO_ECHO3)
    delay4 = distance(GPIO_TRIGGER4, GPIO_ECHO4)
            
    distance1 = delay1 * 100
    distance2 = delay2 * 100
    distance3 = delay3 * 100
    distance4 = delay4 * 100
    
    print("m1:%f" % distance1)
    print("m2:%f" % distance2)
    print("m3:%f" % distance3)
    print("m4:%f" % distance4)
    
            
    lowest = distance1
    if(lowest > distance2):
         lowest = distance2
            
    if(lowest > distance3):
         lowest = distance3
                
    if(lowest > distance4):
         lowest = distance4
    print("Lowest: %f" % lowest)
    return lowest


def buzzerOn():
    GPIO.output(GPIO_BUZZER, GPIO.HIGH)
    return

def buzzerOff():
    GPIO.output(GPIO_BUZZER, GPIO.LOW)
    return
 
if __name__ == '__main__':
    try:
        while True:
            dist = sendDistanceSignal()
            
            #dist = distance()
            #if dist > 1:
            #    dist = 1
            #print ("Measured Distance = %f ms" % dist)
            if dist < 0.05 :
                dist = 0.05
                
            if dist <= 0.5:
            
                #buzzer on
                buzzerOn()
                time.sleep(dist/3)
            
            
                #buzzer 
                buzzerOff()
                time.sleep(dist/3)
 
        # Reset by pressing CTRL + C
    except KeyboardInterrupt:
        print("Measurement stopped by User")
        GPIO.output(GPIO_BUZZER, GPIO.HIGH)
        GPIO.cleanup()