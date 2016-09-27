#!/usr/bin/php
<?php
/*
Startup script needs to handle:

1. AMI Deployment 		- Public IP Change
2. Instance stop/start 	- Public IP Change
3. Vagrant reload		- Public Ip Change
4. MySQL root connection params removal on first boot.


This script will execute on each reboot of the server.
It will be called by rc.local.

The script starts with determining the current public IP address.

*/

$url = 'http://instance-data.ec2.internal';
$wrapper = fopen('php://temp', 'r+');
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_STDERR, $wrapper);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
fclose($wrapper);


if(!$result) {
	//Not an ec2 instance
	$host = gethostname();
	$ip = gethostbynamel(gethostname());
	if (count($ip) > 1) {
		$ip = $ip[1];
	}
	else {
		$ip = $ip[0];
	}

} 
else {
	$ip = file_get_contents('http://169.254.169.254/latest/meta-data/public-ipv4');
	$host = file_get_contents('http://169.254.169.254/latest/meta-data/public-hostname');
}

var_dump($ip);
var_dump($host);


echo "Updating hostname for environment";
exec("sed -e 's|hostaddress|$ip|g' /vagrant/chef/chef-repo/environments/aws_tmp.rb > /vagrant/chef/chef-repo/environments/aws2.rb");
exec("mv /vagrant/chef/chef-repo/environments/aws2.rb /vagrant/chef/chef-repo/environments/aws.rb");
echo "Billing deployed: http://$ip";
