<?php

require('../dbconnection.php');

$db = createSqliteConnection('./mydatabase.db');

// tehdään kysely merkkijonona

$sql = " SELECT * FROM person";

// valmistellaan kysely tietokantayhteydellä

$statement = $db -> prepare($sql);

// suoritetaan valmisteltu kysely (statement)

$statement -> execute();

// haetaan fetch komennolla kyselyn tulokset

$firstRow = $statement -> fetchAll(PDO::FETCH_COLUMN,1);

// Käydään tuloksia läpi

foreach ($rows as $row) {
    echo $row. "<br>";
}


