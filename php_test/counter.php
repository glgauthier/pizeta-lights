<?php

$tz = 'America/New_York';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
$user = "IP: ". $_SERVER['REMOTE_ADDR']. " Date/Time: ". $dt->format('d.m.Y, H:i:s'). "<br>";

$user .= file_get_contents('countlog.txt');
file_put_contents('countlog.txt',$user,LOCK_EX);

echo file_get_contents('countlog.txt');

?>

