#! /bin/bash

## update and install curl to download the installer
sudo apt update
sudo apt install curl

## download the teams app installer
curl https://packages.microsoft.com/repos/ms-teams/pool/main/t/teams/teams_1.3.00.16851_amd64.deb --output teams.deb

## install teams for linux
sudo dpkg -i teams.deb

## remove the installer
rm teams.deb

echo "Microsoft Teams succesfully installed"