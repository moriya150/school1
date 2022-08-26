<?php


$fruits = array("apple" => "リンゴ", "orange" => "ミカン");

$json = json_encode($fruits,JSON_UNESCAPED_UNICODE);    

$fruits = json_decode($json, true);

var_dump($json);


?>