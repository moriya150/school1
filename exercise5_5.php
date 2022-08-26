<?php


$numbers = array(10,5,9,7,2);
$answer = 0;


foreach($numbers as $number)
{
    $answer = $answer + $number;


}

$answer = $answer / count($numbers);

print $answer;


?>