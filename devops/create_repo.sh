#!/bin/bash

read -p "Name of the GitHub Repository to be created: " repo_name
repo_user=mday100

# create the repo and initialize
mkdir ${repo_name}
cd ${repo_name}
git init
git remote add origin "https://github.com/${repo_user}/${repo_name}.git"

echo "The ${repo_name} local repository has just been created on this computer!"

if [[ $(hub) ]]; then
	hub create ${repo_name}
	echo "# ${repo_name}" >> README.md
	git add README.md
	git commit -m "initial repo creation commit"
	git push -u origin master
else
	echo "Hub is not installed on this computer to create your repository in GitHub!"
fi
