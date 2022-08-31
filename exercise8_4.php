<?php


$date = new DateTime();
$date->modify("+1months");



$handle = fopen("nextMonth.txt","w");

if($handle)
{
    fwrite($handle,$date->format("Y/m/d H:i:s"));

    fclose($handle);

    print "ファイルを書き込みました。";
}


?>