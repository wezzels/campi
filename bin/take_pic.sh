#!/bin/bash

nowtime=`date '+%d-%m-%Y_%H_%M_%S'`
cp /var/www/html/pics/cam.jpg /var/www/html/pics/image.jpg
cp /var/www/html/pics/image.jpg /var/www/html/pics/pic-${nowtime}.jpg
