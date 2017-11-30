<?php
	header("Content-type:text/xml");
	
	//Connect to the third-party server and get the feed
	
	$feed = file_get_contents("http://synd.cricbuzz.com/j2me/1.0/livematches.xml");
	
	echo $feed;

?>