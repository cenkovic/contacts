template "/opt/shellProtect.php" do
  source "shellProtect.php" 
  mode "0755"
  owner "root"
end
template "/opt/hostnames.php" do
  source "hostnames.php" 
  mode "0755"
  owner "root"
end
template "/vagrant/public_html/.htaccess" do
  source ".htaccess.erb" 
  mode "0755"
  owner "root"
end

template "/vagrant/core/application/configs/application.xml" do
  source "application.xml.erb" 
  mode "0755"
  owner "root"
end

template "/vagrant/core/application/configs/paymentGateway.xml" do
  source "paymentGateway.xml.erb" 
  mode "0755"
  owner "root"
end

template "/vagrant/public_html/config.php" do
  source "config.php.erb" 
  mode "0755"
  owner "root"
end





bash "Give permission to temporary dir" do
  cwd node['deploy']['root']
  code <<-EOH
    sudo chmod 777 /vagrant/temporary
  EOH
end

bash "Install Zend and move library" do
  code <<-EOH
    if [ -d "/lib/Zend" ]; then
    echo "Zend library already exists.";
    else
    rm  -Rf /vagrant/core/library/Zend;
    echo "Delete Zend library";

    rm -Rf /lib/temp_zend;
    mkdir /lib/temp_zend;
    cd /lib/temp_zend;
    echo "Make temp folder";

    apt-get install git -y;
    echo "installing Git";

    git clone https://github.com/zendframework/zf1.git;
    cd zf1;
    git reset --hard 3e31137181d121d03cb1117fd95b07027cfa4bea;
    echo "Clone Zend repository";

    mv /lib/temp_zend/zf1/library/Zend /lib/Zend;
    echo "Move Zend library";

    ln -s /lib/Zend /vagrant/core/library/;
    echo "Create symlink";
    fi
  EOH
end

