<?php 

// database connection 
include 'app/init.php';

// query to post to database to add items
// var_dump($_POST);
// // echo $_POST;
$res= pg_insert( $dbconn, 'items', $_POST ) 
 or die('Query failed: ' . pg_last_error());


// route back to index.php
header('Location: index.php');

