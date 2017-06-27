#!/usr/bin/env bash
source ./down.sh
sudo docker-compose build
sudo docker-compose up -d
