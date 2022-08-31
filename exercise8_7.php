<?php


/*現在の日時を取得し今年が始まってからの日数を表示してください*/
$day = new DateTime("2022-01-01");
$day2 = new DateTime();
$diff = $day->diff($day2);
print $diff->days;


?>