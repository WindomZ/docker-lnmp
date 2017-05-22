# dk-lnmp

> Simply deploy lnmp(Linux, Nginx, MySQL, PHP7) using Docker.

## Usage

#### Installation

Cloned to the deployment path.

```bash
$ git clone https://github.com/WindomZ/dk-lnmp.git
$ cd dk-lnmp
```

#### Configuration

- Configure `./env` file, modify `MYSQL_PASSWORD` to yours.

- Configure `./docker-compose.yml`, if you need to change ports.

- `nginx` configuration in `./nginx/nginx.conf`.

- `php` configuration in `./php-fpm/php.conf`.

#### Build and Run

You should have had [Docker](https://docs.docker.com/) 
and [Docker Compose](https://docs.docker.com/compose/) installed.

Deploy up and run lnmp: 
```bash
$ ./sh-up.sh
```

Destroy down and stop lnmp: 
```bash
$ ./sh-down.sh
```

## Reference

- [twang2218/docker-lnmp](https://github.com/twang2218/docker-lnmp)
- [micooz/docker-lnmp](https://github.com/micooz/docker-lnmp)

## License

The [MIT License](https://github.com/WindomZ/dk-lnmp/blob/master/LICENSE)
