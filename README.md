# ft_server
ft_server project of 42 School

This project is an introduction to network administration by making us aware of the importance of using scripts to automate your tasks.

We will use "Docker" technology to install a complete web server, which will be able to run several services, such as a Wordpress, Phpmyadmin, as well as a database.

All configuration files must be in a "srcs" folder at the root.
The Dockerfile must be at the root and will be use to create the container, you don't have the rights to use "dockercompose".
All necessary files for Wordpress must be in "srcs".

The container must run with "Debian Buster".
The server will need to be able to run multiple service at the same time.
The services will be :
_Wordpress to install by yourself.
_Phpmyadmin.
_MySQL.
You will need to make sure your SQL database works with Wordpress and Phpmyadmin.

Your server should be able to use "SSL protocol" when possible.

You will need to make sure that, depending on the url you type, your server is redirecting to the correct site.

You will also have to make sure that your server is running with an automatic index which must be able to be desactivated.