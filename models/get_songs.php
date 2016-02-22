<?php
	//Maak een array aan
	$list = array();
	//Get song query
	$sql = "SELECT * FROM songs";
    $result = $mysqli->query($sql);
    //Haal de resultaten op en plaats ze in een array
    while ($songs = $result->fetch_assoc()){
    	$list[] = $songs;
    }
    //Geef de rijen terug
    return $list;
?>