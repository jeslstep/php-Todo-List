# PHP-Todo-List

User can add items to do, mark them as done, and delete them.


# Website

this link can take up to 30 seconds to load since I am using a free dyno on heroku for hosting:

https://damp-river-35376.herokuapp.com/index.php

# Built With

* HTML
* PHP
* PostgreSQL
* CSS

* Heroku deployment:
1. Composer (package manger) (will help me deploy to heroku)
https://getcomposer.org/download/ 
How to install:
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
mv composer.phar /usr/local/bin/composer
composer -V
2. composer init
http://weaintplastic.github.io/web-development-field-guide/Development/Frontend_Development/Setting_up_your_project/Setup_Dependency_Managers/Composer/Initialize_Composer_on_a_new_Project.html

3. To generate your composer.lock file, make sure you have Composer installed and then type: `composer update`

# Setup

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

## Prerequisites
*Postgres
Install the software needed to run Postgres:
Install Homebrew: package manager for macOS or Linux
1. Go to: https://brew.sh/
2. follow brew install instructions 

Install and start Postgres:
1. open terminal and run `brew install postgres`
2. run `brew services start postgresql`

Install Postico:
1. Go to: https://eggerapps.at/postico/
2. Download
3. Unzip and move to your Applications folder
4. Open (double-click Postico icon)
5. Create New Favorite
6. Click New Favorite
7. Fill in this form as follows:
8. Nickname: Localhost 
9. Host: localhost
10. Port: 5432, the default
11. User: user account name that installed Postgres. The default should be good.
12. Find your username in your terminal: Add Connection
13. Password: If you followed the above installation of Postgres, this can be left blank
14. Database By default, Postgres creates a database called whatever your username is.


Create database and table:
1. copy contents of database.sql file
2. paste them into the SQL Query field and Execute Statment

## Steps to Get the Development Environment Running

1. Download this project.
2. open in editor (I use VS code)
3. open a terminal window (control ~)
4. run `php -S localhost:8000`
5. open browser at localhost:8000


# Completed Features

Feature addItems -- allows user to add items to postgres database
Feature markItemsAsDone -- allows user to update items as complete 
Feature detelet tasks -- allows user delete tasks from the database

# Next Steps

Feature hostPHPTodoList -- deploy
