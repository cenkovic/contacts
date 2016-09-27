#!/usr/bin/php
<?php
/*
Script for reparing system from bash shell security problem - Shellshock

Test to see if system is still vulnerable
	curl https://shellshocker.net/shellshock_test.sh | bash

This script will execute on each reboot of the server.
It will be called by rc.local.
*/

//Upgrading bash
$upgradeSystem="sudo apt-get update; apt-get install --only-upgrade bash";
var_dump($upgradeSystem);
exec($upgradeSystem);

?>