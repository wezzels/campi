#On a Linux Box
#Make image.
wget http://osoyoo.com/driver/rpi_35_v6_1_2_3_jessie_kernel_4_4_50.rar
sudo apt-get install unrar
unrar rpi_35_v6_1_2_3_jessie_kernel_4_4_50.rar
sudo dd if=./rpi_35_v6_1_2_3_jessie_kernel_4_4_50.img of=/dev/sdb bs=1M


#Run on the installed Raspberry Pi
exit
sudo apt-mark hold raspberrypi-kernel
sudo apt-mark hold raspberrypi-bootloader

sudo apt-get update
#sudo apt-get -y upgrade

sudo apt-get install -y gpac
sudo apt-get install -y jpegoptim
sudo apt-get install -y convert
sudo apt-get install -y imagemagick
sudo apt-get install -y autossh 
sudo apt-get install -y vim htop git 
sudo apt-get install -y nginx
sudo apt-get install -y php5-common php5-cli php5-fpm
sudo service php5-fpm restart ; sudo service nginx restart
