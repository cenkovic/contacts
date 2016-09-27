# -*- mode: ruby -*-
# vi: set ft=ruby :

puts ENV['app_env']

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.hostname = "contacts"

  # Every Vagrant virtual environment requires a box to build off of.
  config.vm.box = "trusty-server"

  # The url from where the 'config.vm.box' box will be fetched if it
  # doesn't already exist on the user's system.

  config.vm.box_url = "https://oss-binaries.phusionpassenger.com/vagrant/boxes/latest/ubuntu-14.04-amd64-vbox.box"

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.

  config.vm.network :private_network, ip: "10.11.12.13"
  config.vm.network :forwarded_port, guest: 80, host: 8888
  config.vm.network :forwarded_port, guest: 443, host: 4533
  config.vm.network :forwarded_port, guest: 587, host: 4587


  config.vm.provider "virtualbox" do |v|
    v.customize ["modifyvm", :id, "--cpuexecutioncap", "100"]
    v.customize ["modifyvm", :id, "--memory", "4096"]
    v.customize ["modifyvm", :id, "--cpus", 2]
  end

  # If true, then any SSH connections made will enable agent forwarding.
  # Default value: false
  # config.ssh.forward_agent = true

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  # Enable provisioning with chef solo, specifying a cookbooks path, roles
  # path, and data_bags path (all relative to this Vagrantfile), and adding
  # some recipes and/or roles.
  config.vm.synced_folder ".", "/vagrant", :nfs => true
  config.vm.provision "shell", path: "bootstrap.sh"
  config.vm.provision :chef_solo do |chef|
    chef.roles_path = "./chef/chef-repo/roles"
    chef.cookbooks_path = ["./chef/chef-repo/cookbooks"]
    chef.data_bags_path = "./chef/chef-repo/data_bags"
    chef.environments_path = "./chef/chef-repo/environments"
      chef.add_recipe "apt"
      chef.add_recipe "chef_gem"
      chef.add_recipe "base"
      chef.add_recipe "build-essential"
      chef.add_recipe "openssl"
      chef.add_recipe "apache2"
      chef.add_recipe "apache2::mod_php5"
      chef.add_recipe "apache2::mod_rewrite"
      chef.add_recipe "apache2::mod_ssl"
      chef.add_recipe "mysql::server"
      chef.add_recipe "mysql::client"
      chef.add_recipe "mysql_charset"
      chef.add_recipe "php"
      chef.add_recipe "memcached"
      chef.add_recipe "php::module_mysql"
      chef.add_recipe "php::module_curl"
      chef.add_recipe "php::module_gd"
      chef.add_recipe "php::module_memcache"
      chef.add_recipe "deploy"
      chef.environment = "vagrant"
  end
  #config.vm.provision "shell", inline: "sudo sh /etc/rc.local"
end
