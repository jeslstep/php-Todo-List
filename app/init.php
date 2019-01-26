<?php

// connect to postgreSQL database
$dbconn = pg_connect("host=localhost dbname=php_todo")
    or die('Could not connect: ' . pg_last_error());
