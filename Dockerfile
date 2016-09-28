FROM php:7-apache
WORKDIR /var/www/html
COPY ./ /var/www/html/
ADD docker/000-default.conf /etc/apache2/sites-enabled/000-default.conf
RUN apt-get update \
    && apt-get install -y \
        git \
        libxslt1-dev \
        zlib1g-dev \
    && apt-get clean \
    && apt-get autoremove \
    && rm -r /var/lib/apt/lists/*
RUN docker-php-ext-install \
    mysqli \
    xsl \
    zip
RUN a2enmod rewrite
RUN chmod -R 777 /var/www/html/var
RUN service apache2 restart
