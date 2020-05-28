#!/bin/bash

if [[ $(terraform) ]]; then
	mkdir ~/terraform
	cp main.tf ~/terraform
	cd ~/terraform
	terraform init
	terraform validate
	terraform apply -auto-approve
else
	echo "Terraform needs to be installed on your workstation!"
fi
