
#
default['mysql']['service_name'] = 'default'

#default['mysql']['server_root_password'] = 'DB_PASSWORD'
default['mysql']['server_debian_password'] = nil
default['mysql']['server_repl_password'] = nil

# used in grants.sql
default['mysql']['allow_remote_root'] = false
default['mysql']['remove_anonymous_users'] = true
default['mysql']['root_network_acl'] = nil


case node['platform']
when 'smartos'
  default['mysql']['data_dir'] = '/opt/local/lib/mysql'
else
  default['mysql']['data_dir'] = '/var/lib/mysql'
end

# port
default['mysql']['port'] = '3306'


#database file attributes
default['mysql']['src_filepath'] = '/vagrant/db'
default['mysql']['dbflag'] = '/var/run/.db_created'
default['mysql']['tableflag'] = '/var/run/.table_created'


#default['mysql']['dbname'] = 'my_database'



