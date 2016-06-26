#!usr/bin/env/ python
#enciende.py
#importamos la libreria GPIO
import RPi.GPIO as GPIO
import time 
#Definimos el modo BCM 
GPIO.setmode(GPIO.BCM) 

#Ahora definimos el pin GPIO a evaluar como salida

# -------------------------------------------------- #
# Definicion constantes                           #
# -------------------------------------------------- #

# GPIOs motor izquierdo
L1=17  # H-Bridge 1
L2=27 # H-Bridge 2

# GPIOs motor derecho
R1=10 # H-Bridge 3
R2=9 # H-Bridge 4


led=13

GPIO.setup(led, GPIO.OUT) 


GPIO.setup(L1, GPIO.OUT)
GPIO.setup(L2, GPIO.OUT)

GPIO.output(led, GPIO.HIGH)
GPIO.output(L1, GPIO.HIGH)
GPIO.output(L2, GPIO.LOW)


print "Esperar tres segundo"

time.sleep(3)
GPIO.output(led, GPIO.LOW)


print "Limpiamos las salida de los gpio"
GPIO.cleanup()                       #Limpiamos los pines GPIO y salimos
print "Proceso terminado"
print L1, L2
