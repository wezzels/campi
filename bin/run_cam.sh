#!/bin/bash

while [ 1 ]
do
  #/usr/bin/raspistill -t 0 -q 70 -w 640 -h 480 -o /var/www/html/ram/cam.jpg 2>&1
###/usr/bin/raspistill -t 0 -q 60 -w 1920 -h 1080 -o /var/www/html/ram/cam.jpg #2>&1
#sleep 6
###/usr/bin/convert -resize 25% /var/www/html/ram/cam.jpg /var/www/html/ram/cam_25.jpg #2>&1
#sleep 4
###/usr/bin/convert -pointsize 20 -fill yellow -draw "text 10,40 '`date`' " /var/www/html/ram/cam_25.jpg /var/www/html/ram/cam_text.jpg #2>&1
#sleep 2

/usr/bin/raspistill -q 60 -w 1920 -h 1080 -o /var/www/html/ram/cam.jpg && \
/usr/bin/convert -resize 25% /var/www/html/ram/cam.jpg /var/www/html/ram/cam_25.jpg && \
/usr/bin/convert -pointsize 20 -fill yellow -draw "text 10,40 '`date`' " /var/www/html/ram/cam_25.jpg /var/www/html/ram/cam_text.jpg


done
