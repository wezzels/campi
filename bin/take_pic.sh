#!/bin/bash

nowtime=`date '+%d-%m-%Y_%H_%M_%S'`
/usr/bin/convert -resize 25% /var/www/html/ram/cam.jpg /var/www/html/pics/image.jpg 2>&1
cp /var/www/html/ram/image.jpg /var/www/html/pics/pic-${nowtime}.jpg

