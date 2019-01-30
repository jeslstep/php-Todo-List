<?php


// connect to local postgreSQL database
$dbconn = pg_connect("host=localhost dbname=php_todo")
    // connect heroku database
    or $dbconn = pg_connect(getenv("DATABASE_URL"))
    or die('Could not connect: ' . pg_last_error());