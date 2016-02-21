<?php
	$previous_id = $song_id - 1;
	$next_id = $song_id + 1;
	$previous_query = "SELECT * FROM songs WHERE id = $previous_id";
	$current_query = "SELECT * FROM songs WHERE id = $song_id";
	$next_query = "SELECT * FROM songs WHERE id = $next_id";
	$previous = $mysqli->query($previous_query);
	$current = $mysqli->query($current_query);
	$next = $mysqli->query($next_query);
	$previous_song = $previous->fetch_assoc();
	$current_song = $current->fetch_assoc();
	$next_song = $next->fetch_assoc();
?>