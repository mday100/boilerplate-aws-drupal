#!/bin/bash

# deploy main.tf if terraform is installed
if [[ $(terraform) ]]; then
	mkdir ~/terraform
	cp main.tf vm_init.sh ~/terraform
	cd ~/terraform
	terraform init
	terraform validate
	terraform apply -auto-approve
else
	echo "Terraform needs to be installed on your workstation!"
fi
