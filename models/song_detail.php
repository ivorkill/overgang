<?php

	$current_song = array();
	//Bereken het id van het vorige lied
	$previous_id = $song_id - 1;
	//Bereken het id van het volgende lied
	$next_id = $song_id + 1;
	//Voer de query's uit
	$previous_query = "SELECT * FROM songs WHERE id = $previous_id";
	$current_query = "SELECT * FROM songs JOIN albums ON songs.album_id=albums.id JOIN artists ON songs.artist_id=artists.id WHERE songs.id = $song_id";
	$next_query = "SELECT * FROM songs WHERE id = $next_id";
	$previous = $mysqli->query($previous_query);
	$current = $mysqli->query($current_query);
	$next = $mysqli->query($next_query);
	$previous_song = $previous->fetch_assoc();
	$next_song = $next->fetch_assoc();
	while ($songs = $current->fetch_assoc()){
    	$current_song[] = $songs;
    }
    //Geef de rijen terug
    return $current_song;
?>