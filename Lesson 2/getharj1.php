<?php

$luku1 = $_GET["x"];
$luku2 = $_GET["y"];

echo "Lukujen summa on" .($luku1+$luku2);

// osoitteen perään ?x=10&y=12

foreach($_GET as $key => $value) {
    echo $key. "=" .$value. "<br>";
}


