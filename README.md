# Simple Shortner URL 

This repository contains a simple shortner url with `docker-compose` configuration to start a `LEMP (Linux, Nginx, MariaDB, PHP)` stack.

## Details

The following versions are used.

* PHP 7.4 (FPM)
* Nginx nginx:latest
* MariaDB mariadb/server:10.4
* Docker-compose 3.7

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes

### Configuration

The Nginx configuration can be found in `config/nginx/`.

You can also set the following environment variables, for example in the included `.env` file:

| Key | Description |
|-----|-------------|
|APP_NAME|The name used when creating a container.|
|MYSQL_ROOT_PASSWORD|The MySQL root password used when creating the container.|

## Usage

To use it, simply follow the following steps:

##### Clone this repository.

Clone this repository with the following command: `git clone https://github.com/kalin5850/LEMP.git`.

##### Start the server.

Start the server using the following command inside the directory you just cloned: `docker-compose up --build -d`.


## Acknowledgments
 
Reference:
 
###### https://www.educative.io/courses/grokking-the-system-design-interview/m2ygV4E81AR
###### https://medium.com/swlh/how-to-build-a-tiny-url-service-that-scales-to-billions-f6fb5ea22e8c
###### https://www.codexworld.com/php-url-shortener-library-create-short-url/

     