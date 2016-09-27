package 'python'
package 'python-software-properties'
package 'curl'
package 'php5'
package 'php5-curl'
package 'php5-mysql'



template "/etc/rc.local" do
  source "rc.local.erb"
  mode   0755
end

