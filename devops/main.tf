# Creates a new instance of the latest Ubuntu 18.04 on
# t2.micro node installing Docksal with an AWS Tag "DEV"
# FOR DEVELOPMENT AND DEMO USE ONLY DUE TO NO SECURITY

provider "aws" {
  region = "us-east-2" # Ohio
}

data "aws_ami" "ubuntu" {
  most_recent = true

  filter {
    name   = "name"
    values = ["ubuntu/images/hvm-ssd/ubuntu-bionic-18.04-amd64-server*"]
  }

  filter {
    name   = "virtualization-type"
    values = ["hvm"]
  }

  owners = ["099720109477"] # Canonical
}

resource "aws_key_pair" "terraform" {
  key_name   = "my-public-key"
  public_key = "${file("~/.ssh/id_rsa.pub")}"
}

resource "aws_instance" "web" {
  ami             = "${data.aws_ami.ubuntu.id}"
  instance_type   = "t2.micro"
  security_groups = ["Wide Open"]
  key_name        = "my-public-key"

  user_data = "${file("./vm_init.sh")}"

  tags = {
    Name = "DEV"
  }
}

output "instance_ips" {
  value = ["${aws_instance.web.*.public_ip}"]
}
