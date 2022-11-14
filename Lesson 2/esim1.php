<?php
echo "";


// Tutki löytyykö jokin muuttuja. Palauuttaa tosi/epätosi

if(isset($POST["name"])){

}

// GET ja POST

$name = $_GET["name"];
$age = $_GET["age"];

echo "Hello" .$name;


$name = $_POST["name"];
$age = $_POST["age"];

echo "Hello" .$name;

//Miten me haetaan tietoa php:sta
//Header komennolla määritellään tiedon tyyppi

header('Content-type:application/json');
echo '{"name": "eEima"}';

//miten vastaanotetaan json tietoa
//data_objectin avulla voidaan tekstitieto purkaa

$body = file_get_contents('php://input');
$dataObject = json_decode($body);
foreach($dataObject as $person){
    echo $person-> name. "<br>" ;
}


//print_r($body);
