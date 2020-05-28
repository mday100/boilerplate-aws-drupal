
# boilerplate-aws-drupal
A base or sample Drupal 8 project defined by Acquia and powered by Docksal that deploys into AWS.

Docksal is a Docker tool for building containerized development environments. From a zero-config setup to a fully customized build, along with the command-line tool fin, Docksal provides a powerful and flexible development platform.

## Getting Started
If you are running on an Ubuntu workstation you can utilize a set of automation scripts to get set up.

Start by having your AWS API access key and secret in hand or follow instructions for [creating an AWS API access key](https://aws.amazon.com/premiumsupport/knowledge-center/create-access-key/) and have the values for your AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY ready.

From your terminal, go to the directory where you have cloned the repository and enter the following commands and follow the prompts:
```
cd devops
source ./init.sh
```
When complete, you should be able to interact with the AWS API, have ssh key pairs created if none found, and have Hub and Terraform installed.

## Creating the AWS Environment
From your terminal, go to the directory where you have cloned the repo and enter the following commands:
```
cd devops
./create_vm.sh
```
When complete, you should be able to connect to the newly created virtual machine:
```
ssh ubuntu@${ip_address_output}
```
To destroy the virtual machine go to the terraform directory and enter the following command:
```
cd ~/terraform
terraform destroy
```

## Creating a New GitHub Repository
From your terminal, go to the directory where you have cloned the repo and enter the following commands and follow the prompts:
```
cd devops
./create_repo.sh
```
