<?php
// get heroku database url to connect database
$url = parse_str(getenv($DATABASE_URL));

// seperate aspects of database url
$host = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$database = substr($url["path"], 1);
// connect to postgreSQL database
$dbconn = pg_connect("host=$host dbname=$database user=$username pass=$password ")
    or die('Could not connect: ' . pg_last_error());