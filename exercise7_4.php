<?php


$handle = fopen("characterData.txt","r");
$characterData = array("名前" => "", "性別" => "","年齢"=>"");

if($handle)
{
    while(!feof($handle))
    {
        $buffer = fgets($handle);
        $count = 0;
        $characterData[$count] = $buffer;
        $json = json_encode($characterData[$count], JSON_UNESCAPED_UNICODE);
        print $json."<br/>";
        $count ++;
    }

    fclose($handle);

}


?>