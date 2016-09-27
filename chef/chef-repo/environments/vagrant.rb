name "vagrant"
description "Local Development Environment"


default_attributes(
		    :mysql => {
		      :server_root_password  	=> "root",
		      # :dbname					=> "contac",
		      # :default_sql_file			=> "/vagrant/db/usersdb.sql"
		    },
		    :base => {
		      :hostname  => "10.11.12.13"
		    },
		    :apache => {
		    	:doc_root 				=> "/vagrant/web",
		    	:default_site_enabled 	=> true
		    },
		    :deploy => {
		    	:root 					=> "/vagrant",
		      	:user  					=> "custom",
		      	:group 					=> "custom",
		    }
)
override_attributes(

	:apache => {
		    	:doc_root 				=> "/vagrant/web",
		    	:default_site_enabled 	=> true
		    }
)
