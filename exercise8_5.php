<?php


$date = new DateTime();


$handle = fopen("accessHistory.txt","ab");

if($handle)
{
    fwrite($handle,$date->format("Y/m/d H:i:s"));

    fclose($handle);

    print "ファイルを書き込みました。";
}





?>