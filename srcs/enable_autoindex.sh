#!/bin/bash

sed -i -e "s/autoindex off/autoindex on/g" sites-available/default
rm /etc/nginx/sites-enabled/default
ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/
service nginx restart