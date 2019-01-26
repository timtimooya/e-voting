<?php

function alvin(){
$array=array();
$array[0]=array();
$array[0]['name']='kiprono alvin';
$array[0]['age']='25';
$array[1]=array();
$array[1]['name']='alex kimutai';
$array[1]['age']='29';
$array[2]=array();
$array[2]['name']='Rachael Mangeni';
$array[2]['age']='23';

echo "<pre>";
echo "Name\tAge";
foreach ( $array as $var ) {
    echo "\n", $var['name'], "\t\t", $var['age'];
}
}
alvin();


?>