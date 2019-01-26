
<?php

// database connection 
include 'app/init.php';

// query to database to get rows from items table
$query = 'SELECT * FROM items';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";
?>


<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>To Do</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- css styles -->
        <link rel="stylesheet" href="css/styles.css">
        <!-- google fonts api -->
         <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css?family=Shadow+Into+Light+Two" rel="stylesheet">
    </head>
    <body>
        <div class="list">
            <h1 class="header">To Do</h1>
            <ul>
                <li>
                    <span class="item">Pick up shopping</span>
                    <a href="#" class="done-button">Mark as done</a>
                </li>
                <li>
                    <span class="item done">Learn php</span>
                </li>
            </ul>

            <form class="item-add" action="add.php" method="post">
                <input type="text" name="name" placeholder="Type a new item here." class="input" autocomplete="off" required >
                <input type="submit" value="Add" class="submit">
            </form>
        </div>
        
       
    </body>
</html>