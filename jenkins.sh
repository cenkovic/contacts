#!/usr/bin/env bash
cp app/config/parameters_jenkins.yml app/config/parameters.yml
composer install
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
php bin/console doctrine:fixtures:load --purge-with-truncate --append
vendor/bin/phpunit
php bin/console server:start --force
vendor/bin/behat
php bin/console server:stop