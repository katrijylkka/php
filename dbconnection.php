<?php

function createDbConnection (){
    $ini = parse_ini_file('myconf.ini');



    $host = $ini["host"];
    $dbname = $ini ['db'];
    $username = $ini['username'];
    $pw= $ini ['password'];

    try{

        $dbcon =new PDO("mysql:host=$host; dbname=$dbname", $username, $pw);
        return $dbcon;
    }catch(PDOException $e){
    echo $e -> getMessage();
    }
    return null;
}

function createSqliteConnection($filename){
    try{

        $dbcon =new PDO("sqlite:" .$filename);
        return $dbcon;
    }catch(PDOException $e){
    echo $e -> getMessage();
    }
    return null;
}