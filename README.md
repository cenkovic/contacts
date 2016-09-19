Contacts
========

A Symfony project created on September 19, 2016, 6:15 pm.

#Dev setup 
* `git clone git@github.com:cenkovic/contacts.git && cd contacts`
* `php composer.phar install`
* `docker-compose up -d`
* `php bin/console server:run`
* `php bin/console doctrine:database:create` <- ovo samo za slucaj da 
docker-compose nije napravio bazu
* `php bin/console doctrine:schema:update --force`
* `php bin/console doctrine:fixtures:load`

U brosweru http://localhost:8000/

Trebalo bi da se vidi lista od 5 kontakta :)
