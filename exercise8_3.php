<?php


$date = new DateTime();
$date ->modify("+7days");

print $date ->format("Y/m/d H:i:s");


?>