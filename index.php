<?php
    require('dbconnect.php');


$result = $conn->query("SELECT items.id as 'id', items.name as itn, categories.name as cn FROM items, categories WHERE categories.id=items.id_category");
while ($row = $result->fetch()) {
    echo('<p>'.$row['id'].' '.$row['itn'].' '.$row['cn'].'</p>');
    
}