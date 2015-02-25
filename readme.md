# MOSPA
## 3D Model Open Source Price Assessor

![MOSPA Logo](/screen.png)

This is the first attempt to implement a publicly available price prediction tool for 3D Models using machine learning.
Follow the instructions given below to create your own instance of MOSPA.

***

## Installation


Clone project from Git into own directory of choice
```
cd ~/htdocs // existing directory of your choice
git clone <paste Git-clone-URL here>
```
Make sure to have installed Node.js from http://nodejs.org/. Check if node is installed via
```
node -v
```

After cloning from git, install Composer on your OS first via https://getcomposer.org/
On installation of Composer run:

```
composer install
```

Create the project via composer command

```
composer create-project laravel/laravel <insert project name here>
```

Set database settings to work correctly with local SQLite instance
See File: /app/config/database.php

Afterwards run the following command in project home folder

```
php artisan migrate
```

as well as

```
php artisan db:seed
```

To finish and run the project, serve the application with

```
php artisan serve
```


In case you need to reset/rollback the DB, try

```
php artisan migrate:rollback
```

Have fun!