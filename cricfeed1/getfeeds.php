<?php
header("Content-type:text/xml");

$file = file_get_contents("http://sports.yahoo.com/tennis/rss.xml");
echo $file;
?>
