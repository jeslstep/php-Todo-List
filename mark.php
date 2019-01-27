<?php 

require_once 'app/init.php';

$item = $_GET['item'];
echo $item;

$query = "UPDATE items SET done = true 
WHERE id= + '$item'";
$result = pg_query($query) 
or die('Query failed: ' . pg_last_error());



