Contacts
========

A Symfony project created on September 19, 2016, 6:15 pm.

#Dev setup 
* Make sure that your global php.ini file has default timezone set. 
It is usually in `/etc/php.ini`. If one does not exists copy from 
`/etc/php.ini.default` and set default timezone
* `git clone git@github.com:cenkovic/contacts.git && cd contacts`
* Symfony will ask for database parameters:
  * database_host: 127.0.0.1
  * database_port 33306
  * database_name: contacts
  * database_user: root
  * database_password: root
* `php composer.phar install`
* `docker-compose up -d`
* `php bin/console server:run`
* `php bin/console doctrine:schema:update --force`
* `php bin/console doctrine:fixtures:load`
* `mkdir web/bundles && cd web/bundles && ln -s ../../vendor/twbs/bootstrap/dist/ bootstrap`

U brosweru http://localhost:8000/

Trebalo bi da se vidi lista od 5 kontakta :)
