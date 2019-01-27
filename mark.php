<?php 

require_once 'app/init.php';

if (isset($_GET['as'], $_GET['item'])) {
    $as = $_GET['as'];
    $item = $_GET['item'];

    switch($as){
        case 'done':
        $res= pg_update( $dbconn, 'items', $_POST, PQSQL_DML_ESCAPE ) 
            or die('Query failed: ' . pg_last_error());
        $doneQuery = $dbconn->prepare("
            UPDATE items
            SET done = 1
            WHERE id = :item
        
        ");
        break;
    }
}