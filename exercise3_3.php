<?php

$number1 =10;
$number2 =2;


switch($number2)
{
    case 0:
        print "「0で割り算はできません」";
        break;

    default:
        $answer = $number1 / $number2;

        print $number1;
        print " ÷ ";
        print $number2;
        print " = ";
        print $answer;

}






?>