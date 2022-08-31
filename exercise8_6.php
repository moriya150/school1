<?php


$date = new DateTime();

print $date ->format("d");
print "日";
print"<br/>";


if($date ->format("d")% 2 == 0 )
{
    print "今日の日付は偶数です";

    }else{
            print "今日の日付は奇数です";

        
}


?>