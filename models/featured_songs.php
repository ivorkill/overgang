<?php
	$sql = "SELECT * FROM songs JOIN artists ON songs.artist_id = artists.id";
    $result = $mysqli->query($sql);
    //Haal de resultaten op en plaats ze in een array
    while ($songs = $result->fetch_assoc()){
    	$list[] = $songs;
    }
    //Geef de rijen terug
    return $list;
?>