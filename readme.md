# MOSPA
## 3D Model Open Source Pricing API

This is the first attempt to implement a publicly available pricing API for 3D Models.
Follow the instructions given below to create your own instance of MOSPA.

## Installation

Clone project from Git into own directory of choice
```
cd ~/htdocs // existing directory of your choice
git clone <paste Git-clone-URL here>
```

after cloning from git, install Composer on your OS first via https://getcomposer.org/
After installation of Composer run:

```
composer install
```

Create the project via composer command

```
composer create-project laravel/laravel <insert project name here>
```

Set database settings to work correctly with local SQLite instance
see File: /bptm/app/config/database.php

afterwards run the following command in project home folder

```
php artisan migrate
```

to finish and run the project, serve the application with

```
php artisan serve
```

Have fun!