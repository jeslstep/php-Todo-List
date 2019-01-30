<?php


// connect to postgreSQL database
$dbconn = pg_connect("host=localhost dbname=php_todo") 
    or $dbconn = pg_connect(getenv("DATABASE_URL"))
    or die('Could not connect: ' . pg_last_error());