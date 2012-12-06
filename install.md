## Installation

Clone the ```symfony-sandbox``` repository into your webroot:

    git clone git@github.com:ymc-devel/symfony-sandbox.git

Install the vendor bundles via composer

    cd symfony-sandbox
    curl -s https://getcomposer.org/installer | php
    php composer.phar install

Install the Bundles in the directory ```src/Ymc/``` via Git Submodules:

    cd symfony-sandbox
    git submodule init

## Configuration

Copy and edit ```parameters.yml.dist```

    cp parameters.yml.dist parameters.yml
    vi parameters.yml
    # put your database settings in
    php app/console doctrine:schema:update

Now put your database settings into the ´´´parameters.yml´´´ file...

Change file-permissions like the following

    chmod -R 777 app/cache
    chmod -R 777 app/log

**your are done now **

Open your browser and go to http://MY.LOCAL.HOST/symfony-standard/web/app_dev.php 

