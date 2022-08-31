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

print $answer;

?>