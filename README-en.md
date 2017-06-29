# docker-lnmp

> Simply deploy lnmp(Linux, Nginx, MySQL, PHP7) using Docker.

[中文](https://github.com/WindomZ/docker-lnmp/blob/master/README.md#readme)

## Usage

#### Install

Cloned to the deployment path:
```bash
$ git clone https://github.com/WindomZ/docker-lnmp.git
$ cd docker-lnmp
```

#### Config

- Configure `.env` file, such as modifying `MYSQL_ROOT_PASSWORD` to yours.

- `nginx` configuration in `./nginx/nginx.conf`.

- `php` configuration in `./php-fpm/php.conf`.

- `mysql` configuration in `./mysql/conf.d` and `./mysql/mysql.conf.d`.

#### Build and Run

You should have had [Docker](https://docs.docker.com/) 
and [Docker Compose](https://docs.docker.com/compose/) installed.

If deploy up and run lnmp: 
```bash
$ ./up.sh
```

If deploy down and stop lnmp: 
```bash
$ ./down.sh
```

## Volumes

### NGINX_ROOT

`nginx` root path.

In this deployment of your web project.

### MYSQL_DATA

`mysql` data source. 

_DO NOT MODIFY!_

### SHARE

Shared folder between `nginx`, `php` and `mysql` containers.

## Reference

- [twang2218/docker-lnmp](https://github.com/twang2218/docker-lnmp)
- [micooz/docker-lnmp](https://github.com/micooz/docker-lnmp)
