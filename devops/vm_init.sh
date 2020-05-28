#!/bin/bash

env HOME=/home/ubuntu

# install docksal
sudo rm -rf /var/lib/cloud/*
sudo apt-get update
bash <(curl -fsSL https://get.docksal.io)
