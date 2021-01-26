# CMS with Doctrine ORM and MVC architecture

A custom content management system created with raw PHP using Doctrine ORM, Composer and MVC architecture.

## Launch

- Clone repository to `www` folder inside root AMPPS directory  
[![1.png](https://i.postimg.cc/5Nw1Xz4d/1.png)](https://postimg.cc/1f5bTfVJ)
<br/><br/>
- After succesfully cloning you should see `sprint3` directory inside `www` directory
\
\
[![7.png](https://i.postimg.cc/SsfZGdjC/7.png)](https://postimg.cc/1n4cmpG3)
<br/><br/>
- Create `sprint3` database on MySQL Workbench  
[![3.png](https://i.postimg.cc/6pF1NjZd/3.png)](https://postimg.cc/sM9JYJwX)
<br/><br/>
- Install composer if you haven't done that already:  
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

- Run these commands in `sprint3` repository folder on terminal:  
```
php composer.phar install
vendor\bin\doctrine orm:schema-tool:update --force --dump-sql (if you are using windows CMD)
vendor/bin/doctrine orm:schema-tool:update --force --dump-sql (if you are using git bash / mac / linux terminals)
php composer.phar dump-autoload
```

- Enter this url to browser to see CMS:  
[![2.png](https://i.postimg.cc/fT98f7py/2.png)](https://postimg.cc/SJmLy9yb)
<br/><br/>
- If you want to add pages to CMS enter this url (you will see login details in the input fields):  
[![6.png](https://i.postimg.cc/zvP4HJyQ/6.png)](https://postimg.cc/rRxfv2CG)
<br/><br/>

