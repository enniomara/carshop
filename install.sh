sudo apt-get update

sudo apt install apache2 php php-common php-xml php-zip php-mysql curl php-cli php-mbstring git unzip -y


echo "mysql-server mysql-server/root_password password $ROOT_PW" | sudo debconf-set-selections
echo "mysql-server mysql-server/root_password_again password $ROOT_PW" | sudo debconf-set-selections
sudo apt install mysql-server -y

mysql -uroot -p$ROOT_PW -e"CREATE DATABASE carshop;"

cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

sudo rm $APACHE2_DIR/sites-enabled/000-default.conf
cp $SERVERFILES_DIR/000-default.conf $APACHE2_DIR/sites-enabled/000-default.conf

sudo a2enmod rewrite
sudo systemctl restart apache2


cd /vagrant
composer install

cd /vagrant/app
php artisan migrate && php artisan db:seed
