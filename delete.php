<?php 

require_once 'app/init.php';

// id of item to update
$item = $_GET['item'];
// echo $item;

// query to excute 
$query = "DELETE FROM items 
WHERE id= + '$item'";

// update the status of done
$result = pg_query($query) 
or die('Query failed: ' . pg_last_error());

// route back to index.php
header('Location: index.php');

