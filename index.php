
<?php

// database connection 
include 'app/init.php';

// query to database to get items from items table
$query = 'SELECT id,name,done FROM items;';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());


// store database values for display
$queryResults = array();

$resultRows = array();

while ($values = pg_fetch_array($result)){
    array_push($queryResults, $values['name']);
    array_push($resultRows, $values);
};

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
            <!-- if there are items, do this -->
            <?php if (!empty($resultRows)): ?>
            <!-- loop through stored items in database  -->
            <?php foreach ($resultRows as $item) : ?>
                <li>
                    <span class="item"> <?php  echo $item['name']; ?></span>
                        <?php if ($item['done']): ?>
                            <a href="mark.php?as=done&itmem=<?php echo $itme['id']; ?>" class="done-button">Mark as done</a>
                        <?php endif; ?>
                </li>
            <?php endforeach; ?>
            <!-- else, do this -->
            <?php else : ?>
                <p>No items added</p>
            <?php endif; ?>
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