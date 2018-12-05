# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"
APP_DIR = "/vagrant/app"
APACHE2_DIR = "/etc/apache2"
SERVERFILES_DIR = "/vagrant/server"

Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/bionic64"
  
  config.vm.network "private_network", ip: '192.168.10.10'
  config.vm.network :forwarded_port, guest: 80, host: 8080
  config.vm.network :forwarded_port, guest: 3306, host: 3306

  config.vm.provision :shell, :path => "install.sh", env: {"ROOT_PW" => "password", "APACHE2_DIR" => APACHE2_DIR, "SERVERFILES_DIR" => SERVERFILES_DIR}

  config.vm.synced_folder "app", APP_DIR, :mount_options => ["dmode=777", "fmode=666"]
  config.vm.synced_folder "server", SERVERFILES_DIR, :mount_options => ["dmode=777", "fmode=666"]
end
