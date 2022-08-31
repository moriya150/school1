<?php


$handle = fopen("nameAge.txt","w");

if($handle)
{
    fwrite($handle,"森谷 尊"."\n");
    fwrite($handle,"21歳");

    fclose($handle);

    print "ファイルを書き込みました。";
}


?>