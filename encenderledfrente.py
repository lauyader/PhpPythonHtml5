#!usr/bin/env/ python
#enciende.py
#importamos la libreria GPIO
import RPi.GPIO as GPIO
import time 
#Definimos el modo BCM 
GPIO.setmode(GPIO.BCM) 

#Ahora definimos el pin GPIO a evaluar como salida


led=13

GPIO.setup(led, GPIO.OUT) 
#Y le damos un valor logico alto para encender el LED
GPIO.output(led, GPIO.HIGH) 
#time.sleep(1)
#GPIO.output(led, GPIO.LOW)


#print "Limpiamos las salida de los gpio"
#GPIO.cleanup()                       #Limpiamos los pines GPIO y salimos

