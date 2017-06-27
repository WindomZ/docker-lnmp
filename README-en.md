# docker-lnmp

> Simply deploy lnmp(Linux, Nginx, MySQL, PHP7) using Docker.

## Usage

#### Install

Cloned to the deployment path:
```bash
$ git clone https://github.com/WindomZ/docker-lnmp.git
$ cd docker-lnmp
```

#### Config

- Configure `./env` file, modify `MYSQL_PASSWORD` to yours.

- Configure `./docker-compose.yml`, if you need to change ports.

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

### ./html/

`nginx` root path.

In this deployment of your web project.

### ./mysql/data/

`mysql` data source. 

_DO NOT MODIFY!_

### ./share/

Shared folder between `nginx`, `php` and `mysql` containers.

## Reference

- [twang2218/docker-lnmp](https://github.com/twang2218/docker-lnmp)
- [micooz/docker-lnmp](https://github.com/micooz/docker-lnmp)
