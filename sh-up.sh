#!/usr/bin/env bash
./sh-down.sh
docker-compose build
docker-compose up -d
