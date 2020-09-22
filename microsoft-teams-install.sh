#! /bin/bash


sudo apt update
sudo apt install curl

curl https://packages.microsoft.com/repos/ms-teams/pool/main/t/teams/teams_1.3.00.16851_amd64.deb --output teams.deb

sudo dpkg -i teams.deb

rm teams.deb

echo "Microsoft Teams succesfully installed"