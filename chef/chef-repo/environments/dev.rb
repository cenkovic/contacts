name "dev"
description "Local Development Environment"


default_attributes(

		    :mysql => {
		      :server_root_password  => "root"
		    },
		    :apache => {
		    	:doc_root => "/vagrant/web",
		    	:default_site_enabled => true
		    },
		    :deploy => {
		      :user  => "custom",
		      :group => "custom",
		      :root  => "/vagrant",
		      :js   =>  "server.js"
		    },
                    :aws => {
                      :access_key       =>  "my_access_key",
                      :secret_key       =>  "my_secret_key",
                      :keypair_name     =>  "root",
                      :pvt_key_path     =>  "/absolute/path/to/pvt_key.pem",
		      :security_groups  =>  "default",
		      :ami              =>  "ami-b08b6cd8",
		      :instance_type    =>  "m3.medium",
		      :app_env          =>  "aws"
                    }

)
