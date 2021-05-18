#!/bin/bash

docker system prune
docker image rm debian:buster test:latest
docker build -t test .
docker run -it -p 80:80 -p 443:443 test