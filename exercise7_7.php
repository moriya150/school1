<?php


$answer = 0;

$handle = fopen("number.txt","r");

if($handle)
{
    while(!feof($handle))
    {
        $buffer = fgets($handle);
        $answer = $answer + $buffer;
    }

    fclose($handle);

}

$handle = fopen("total.txt","w");

if($handle)
{
    fwrite($handle,$answer);

    fclose($handle);

    print "ファイルを書き込みました。";
}


?>