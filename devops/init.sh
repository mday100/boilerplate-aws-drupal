#!/bin/bash

# check if the machine is running on ubuntu
if [[ ! -f /etc/lsb-release ]]; then
  echo "This initialization script only fully works on Ubuntu!"
  exit 1
fi

# set up aws credentials
read -p "Enter in your AWS_ACCESS_KEY_ID: " AWS_ACCESS_KEY_ID
read -p "Enter in your AWS_SECRET_ACCESS_KEY: " AWS_SECRET_ACCESS_KEY

echo "export AWS_ACCESS_KEY_ID=${AWS_ACCESS_KEY_ID}" >> ~/.bashrc
echo "export AWS_SECRET_ACCESS_KEY=${AWS_SECRET_ACCESS_KEY}" >> ~/.bashrc
sleep 2
source ~/.bashrc

# install hub and terraform
sudo apt-get update
sudo apt-get install unzip
sudo snap install hub --classic
wget https://releases.hashicorp.com/terraform/0.12.26/terraform_0.12.26_linux_amd64.zip
unzip terraform_0.12.26_linux_amd64.zip
sudo mv terraform /usr/local/bin/

# create ssh key pair if none exist
if [[ ! -f ~/.ssh/id_rsa ]]; then
	mkdir ~/.ssh
	chmod 0700 ~/.ssh
	cat /dev/zero | ssh-keygen -q -N ""
fi

# cleanup
if [[ $(terraform) ]]; then
	sudo rm -f terraform_0.12.26_linux_amd64.zip
	terraform -v
else
	echo "Terraform didn't install properly or there was an issue..."
fi
