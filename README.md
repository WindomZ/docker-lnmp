# docker-lnmp

> 通过Docker实现快捷部署lnmp(Linux, Nginx, MySQL, PHP7)

[English](https://github.com/WindomZ/docker-lnmp/blob/master/README-en.md#readme)

## 用法

#### 安装

克隆项目到部署路径下：
```bash
$ git clone https://github.com/WindomZ/docker-lnmp.git
$ cd docker-lnmp
```

#### 配置

- 配置`.env`文件，比如修改MySQL密码`MYSQL_ROOT_PASSWORD`等。

- `nginx`的定义配置在`./nginx/nginx.conf`下面。

- `php`的定义配置在`./php-fpm/php.conf`下面。

- `mysql`的定义配置在`./mysql/conf.d`和`./mysql/mysql.conf.d`下面。

#### 编译和运行

首先安装好 [Docker](https://docs.docker.com/) 和 [Docker Compose](https://docs.docker.com/compose/)。

如果部署运行lnmp：
```bash
$ ./up.sh
```

如果停止运行lnmp：
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

在`nginx`、`php`和`mysql`容器之间的文件分享路径。

## 参考

- [twang2218/docker-lnmp](https://github.com/twang2218/docker-lnmp)
- [micooz/docker-lnmp](https://github.com/micooz/docker-lnmp)
