#! /bin/bash

#install and configure mysql
sudo apt install mysql-server

#
# uncomment next line to configure mysql password
#
#sudo mysql_secure_installation


# install some compilers that may be neccessary
sudo apt install build-essential
#install apache2 and php and configure localhost 
sudo apt install apache2
sudo apt install php libapache2-mod-php
sudo systemctl restart apache2
# copy apache config files to your apache directory
sudo cp 000-coding.conf /etc/apache2/sites-available/
sudo mv /etc/apache2/apache2.conf /etc/apache2/apache2.conf_old
sudo cp apache2.conf /etc/apache2/

# change <home_dir> for your home directory path in apache configuration files
sudo sed -i "s@<home_dir>@$HOME@g" /etc/apache2/sites-available/000-coding.conf
sudo sed -i "s@<home_dir>@$HOME@g" /etc/apache2/apache2.conf

# enable anew apache configuration
sudo a2ensite 000-coding.conf
sudo systemctl restart apache2
sudo systemctl reload apache2

# create your Rendu directory and add an index.php file to check it works
mkdir -p ~/Rendu
chmod 755 ~/Rendu

#greetings="hello $USER"; 
#echo "<?php echo \"<h1>$greetings</h1> \"; " > ~/Rendu/index.php
#echo "echo \"<p>You can edit this file in $HOME/Rendu/index.php</p>\";?>" >> ~/Rendu/index.php

cp index.php ~/Rendu/index.php
sudo sed -i "s@username@$USER@g" ~/Rendu/index.php

sudo sed -i "s@<home>@$HOME@g" ~/Rendu/index.php

echo -e "\n\nInstallation complete. Everything should be ready if there was no error"
echo -e "\n\nYou can check if the server is working by going to 'localhost:80' in your browser\n"