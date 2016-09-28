FROM php:7-apache
WORKDIR /var/www/html
COPY ./ /var/www/html/
ADD docker/000-default.conf /etc/apache2/sites-enabled/000-default.conf
RUN apt-get update
RUN apt-get install php5-mysql vim -y
RUN a2enmod rewrite
RUN chmod -R 777 /var/www/html/var
RUN service apache2 restart
