#! /bin/bash

## directory where we are going to save all the Coding Academy projects
RenduDir="$HOME/Rendu"

## install and configure mysql
sudo apt install mysql-server

#
## uncomment next line to configure mysql password and settings
#
#sudo mysql_secure_installation


## install some compilers that may be neccessary
sudo apt install build-essential

## install apache2 and php and configure localhost 
sudo apt install apache2
sudo apt install php libapache2-mod-php
sudo systemctl restart apache2

## copy apache config files to your apache directory
sudo cp 000-coding.conf /etc/apache2/sites-available/
sudo mv /etc/apache2/apache2.conf /etc/apache2/apache2.conf_old
sudo cp apache2.conf /etc/apache2/

## change <home_dir> for your home directory path in apache configuration files
sudo sed -i "s@<home_dir>@$RenduDir@g" /etc/apache2/sites-available/000-coding.conf
sudo sed -i "s@<home_dir>@$RenduDir@g" /etc/apache2/apache2.conf

## enable new apache configuration
sudo a2ensite 000-coding.conf
sudo systemctl restart apache2
sudo systemctl reload apache2

## create your Rendu directory and add execution permissions
mkdir -p $RenduDir
chmod 755 $RenduDir

## copy example index file and replace generic username for your own username
cp index.php $RenduDir/index.php
sudo sed -i "s@<username>@$USER@g" $RenduDir/index.php

sudo sed -i "s@<home>@$RenduDir@g" $RenduDir/index.php

echo -e "\n\nInstallation complete. Everything should be ready if there was no error"
echo -e "\n\nYou can check if the server is working by going to 'localhost:80' in your browser\n"