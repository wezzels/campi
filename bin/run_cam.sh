#!/bin/bash

while [ 1 ]
do
#/usr/bin/raspistill -t 0 -q 70 -w 640 -h 480 -o /var/www/html/ram/cam.jpg 2>&1
/usr/bin/raspistill -t 0 -q 60 -w 1920 -h 1080 -o /var/www/html/ram/cam.jpg 2>&1
sleep 2
done

