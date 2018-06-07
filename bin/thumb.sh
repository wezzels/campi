#!/bin/bash


while [ 1 ]
do
/usr/bin/raspistill -t 1 -q 60 -w 1920 -h 1080 --nopreview -n -o /var/www/html/ram/cam.jpg 2>&1
#/usr/bin/raspistill -t 1 -tl 0 -q 60 -w 1920 -h 1080 -n -o /var/www/html/ram/cam.jpg 2>&1

/usr/bin/convert -resize 25% /var/www/html/ram/cam.jpg /var/www/html/ram/cam_25.jpg 2>&1

/usr/bin/convert -pointsize 30 -fill yellow -draw "text 10,40 '`date`' " /var/www/html/ram/cam_25.jpg /var/www/html/ram/cam_text.jpg 2>&1

done
