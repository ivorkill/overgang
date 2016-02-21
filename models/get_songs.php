<?php
	//Get song query
	$sql = "SELECT * FROM songs";
    $result = $mysqli->query($sql);
    while ($songs = $result->fetch_assoc()) {
    	return $songs;
    }
?>