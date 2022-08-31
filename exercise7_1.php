<?php


$handle = fopen("name.txt","r");

if($handle)
{
    while(!feof($handle))
    {
        $buffer = fgets($handle);
        print $buffer."<br/>";
    }

    fclose($handle);

}


?>