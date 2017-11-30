<?php
	header("Content-type:text/xml");
	
	//Connect to the third-party server and get the feed
	extract($_GET);
	$feed = file_get_contents($url);
	echo $feed;

?>