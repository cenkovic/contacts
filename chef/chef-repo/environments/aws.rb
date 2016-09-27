name "aws"
description "AWS Environment"


default_attributes(
		    :mysql => {
		      :server_root_password  	=> "root",
		      # :dbname					=> "billing",
		      # :default_sql_file			=> "/vagrant/db/database.sql"
		    },
		    :base => {
		      :hostname  => "127.0.1.1"
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
		    	:doc_root 				=> "/vagrant/public_html",
		    	:default_site_enabled 	=> true
		    }
)
