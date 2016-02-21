<?php
$url = "192.168.0.253";
    if(checkdnsrr(($url),"A"))
{
    echo "<b>Hue controller is online</b> <br>";
}
else
{
     echo "<b>ERROR: go to epsilon closet and check to make sure controller has power and ethernet </b> <br>";
}
?>
