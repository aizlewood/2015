
IP_ADDRESS = "192.168.33.33"

SSH_PORT = 2211

Vagrant.configure("2") do |config|

  config.vm.box = "clearleft/devbox"
  config.vm.hostname = "devbox"

  config.vm.network :private_network, ip: IP_ADDRESS
  config.vm.network "forwarded_port", guest: 22, host: SSH_PORT
  
  config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=666"]

end