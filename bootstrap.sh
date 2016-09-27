# !/bin/bash

#  if ! [ `which chef-solo` ]; then
# 	 echo "I: Installing Chef using Omnibus Installer...."
# 	 sudo apt-get update
# 	 sudo apt-get install  curl -yq
# 	 wget https://opscode-omnibus-packages.s3.amazonaws.com/debian/6/i686/chef_11.10.0.rc.1-1.debian.6.0.5_i386.deb
# 	 dpkg -i chef_11.10.0.rc.1-1.debian.6.0.5_i386.deb
#  fi
  echo "I: Installing Chef using Omnibus Installer...."
	 sudo apt-get update
	 sudo apt-get install  curl -yq
	 wget https://opscode-omnibus-packages.s3.amazonaws.com/ubuntu/10.04/x86_64/chef_12.6.0-1_amd64.deb
	 dpkg -i chef_12.6.0-1_amd64.deb
 exit 0
