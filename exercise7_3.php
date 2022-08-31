<?php


$answer = 0;
$count = 0;

$handle = fopen("number.txt","r");

if($handle)
{
    while(!feof($handle))
    {
        $buffer = fgets($handle);
        $answer = $answer + $buffer;
        $count ++;
    }

    fclose($handle);

}

$answer = $answer/$count;
print $answer;


?>