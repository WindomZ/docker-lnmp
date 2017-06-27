FROM php:7-fpm

ENV TZ=Asia/Shanghai

COPY sources.list /etc/apt/sources.list

RUN set -xe \
    && echo "Build dependencies..." \
    && buildDeps=" \
        build-essential \
        php5-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng12-dev \
    " \
    && echo "Running dependency..." \
    && runtimeDeps=" \
        libfreetype6 \
        libjpeg62-turbo \
        libmcrypt4 \
        libpng12-0 \
    " \
    && echo "Install php, compile the required packages for building components..." \
    && DEBIAN_FRONTEND=noninteractive \
    && apt-get update \
    && apt-get install -y ${runtimeDeps} ${buildDeps} --no-install-recommends \
    && echo "Compile and install php components..." \
    && docker-php-ext-install iconv mcrypt mysqli pdo pdo_mysql zip \
    && docker-php-ext-configure gd \
        --with-freetype-dir=/usr/include/ \
        --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd \
    && echo "Clean" \
    && apt-get purge -y --auto-remove \
        -o APT::AutoRemove::RecommendsImportant=false \
        -o APT::AutoRemove::SuggestsImportant=false \
        $buildDeps \
    && rm -rf /var/cache/apt/* \
    && rm -rf /var/lib/apt/lists/* \
    && echo "Complete!"

COPY ./conf.d/*.conf /usr/local/etc/php/conf.d/
