# docker-lnmp

> 通过Docker实现快捷部署lnmp(Linux, Nginx, MySQL, PHP7)

![UpdateDate](https://img.shields.io/badge/update-2017--06--29-brightgreen.svg?style=flat-square)

[English](https://github.com/WindomZ/docker-lnmp/blob/master/README-en.md#readme)

## 用法

#### 安装

克隆项目到部署路径下：
```bash
$ git clone https://github.com/WindomZ/docker-lnmp.git
$ cd docker-lnmp
```

#### 配置

- 根据个人环境配置[`.env`](https://github.com/WindomZ/docker-lnmp/blob/master/.env)文件，比如修改MySQL密码`MYSQL_ROOT_PASSWORD`等。

- 如果需要配置`nginx`，在`./nginx/nginx.conf`下面增改。

- 如果需要配置`php-fpm`，在`./php-fpm/php.conf`下面增改。

- 如果需要配置`mysql`，在`./mysql/conf.d`和`./mysql/mysql.conf.d`下面增改。

#### 编译和运行

首先安装好 [Docker](https://docs.docker.com/) 和 [Docker Compose](https://docs.docker.com/compose/)。

- 如果**部署**运行lnmp：
    ```bash
    $ ./up.sh
    ```

- 如果**停止**运行lnmp：
    ```bash
    $ ./down.sh
    ```

## 路径目录

### NGINX_ROOT

`nginx`的root路径。

将web应用部署到这里。

### MYSQL_DATA

`mysql`的数据存储路径。

_请不要修改里面内容_

### SHARE

在`nginx`、`php-fpm`和`mysql`容器之间的文件分享路径。

## 参考

- [twang2218/docker-lnmp](https://github.com/twang2218/docker-lnmp)
- [micooz/docker-lnmp](https://github.com/micooz/docker-lnmp)
