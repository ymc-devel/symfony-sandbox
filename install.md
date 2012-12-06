## Installation

Clone the ```symfony-sandbox``` repository into your webroot:

    git clone git@github.com:ymc-devel/symfony-sandbox.git

Install the vendor bundles via composer

    cd symfony-sandbox
    curl -s https://getcomposer.org/installer | php
    php composer.phar install

Install the YMC bundles via Git Submodules:

    git submodule init
    git submodule update
    
After this installation, they can be found in ```src/Ymc/*Bundle```

## Configuration

Copy and edit ```parameters.yml.dist```

    cp app/config/parameters.yml.dist app/config/parameters.yml
    vi app/config/parameters.yml
    # put your database settings in
    php app/console doctrine:schema:update

Change file-permissions like the following

    chmod -R 777 app/cache
    chmod -R 777 app/log

**your are done now **

Open your browser and go to http://MY.LOCAL.HOST/symfony-standard/web/app_dev.php 
