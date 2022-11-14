<?php

require('../dbconnection.php');

$db = createSqliteConnection("../chinook.db");

$sql = 'SELECT * FROM artists'; 

$statement = $db -> prepare($sql);

$statement -> execute();

$firstArtist = $statement -> fetchAll(PDO::FETCH_ASSOC);
$aid =$firstArtist['Name'];

$sql = "SELECT Title FROM albums WHERE ArtistId= ".$aid;

$statement = $db -> prepare($sql);

$statement -> execute();

echo "<h1>" .$aname. "</h1>";

$titles = $statement -> fetchAll(PDO::FETCH_COLUMN, 0);

foreach($titles as $title) {
    echo $title. '<br>';
}