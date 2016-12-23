<?php

$number = $_GET["num"];

function rp($Number){
$Rand = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $Number); 
 return $Rand; 
}

echo rp($number);
