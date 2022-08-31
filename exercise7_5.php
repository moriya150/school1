<?php


$handle = fopen("nameWrite.txt","w");

if($handle)
{
    fwrite($handle,"森谷 尊");

    fclose($handle);

    print "ファイルを書き込みました。";
}


?>