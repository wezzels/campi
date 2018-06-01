#!/bin/bash

while [ 1 ]
do
/usr/bin/raspistill -t 0 -q 70 -w 640 -h 480 -o /var/www/html/pics/cam.jpg 2>&1
sleep 2
done

