# PHP-Todo-List

User can add to do items, mark as done, and delete them.


# Website

Not deployed 

# Built With

* HTML
* PHP
* PostgreSQL
* CSS


# Setup

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

## Prerequisites

Install the software needed to run Postgres:
Install Homebrew: package manager for macOS or Linux
1. Go to: https://brew.sh/
2. follow brew install instructions 

Install and start Postgres:
1. open terminal and run `brew install postgres`
2. run `brew services start postgresql`

Install Postico (optional):
1. Go to: https://eggerapps.at/postico/
2. Download
3. Unzip and move to your Applications folder
4. Open (double-click Postico icon)

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























CREATE TABLE "items" (
    "id" SERIAL PRIMARY KEY,
    "name" varchar(255) NOT NULL,
	"done" BOOLEAN NOT NULL DEAFAULT FALSE,
	"created" DATE NOT NULL DEFAULT CURRENT_DATE
);


