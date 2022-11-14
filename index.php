<?php

// tietokantayhteys
require('dbconnection.php');

$dbcon = createDbConnection();
// $dbcon = createSqliteConnection();

// lisää henkilö

$command = "INSERT INTO person (fname,lname) VALUES ('John', 'Doe')";

// siirrä tiedor

//$dbcon-> exec($command);

// hae viimeisin id

//$personid = $dbcon -> lastInsertId();




