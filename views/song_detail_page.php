<div id="song_detail">
	<?php
	echo "<div id='left_song'><a href='?page=song_detail&song_id=".$previous_song['id']."'>".$previous_song['song_title']."</a></div>";
	echo "<div id='right_song'><a href='?page=song_detail&song_id=".$next_song['id']."'>".$next_song['song_title']."</a></div>";
	foreach ($current_song as $songList) {
		$song_id = $songList['id'];
		$song_title = $songList['song_title'];
		$artist_name = $songList['artist_name'];
		$audio = $songList['audio'];
		$album_title = $songList['album_title'];
		$genre = $songList['song_genre'];
		$album_img = $songList['album_image'];
		echo "<div id='main_song'><h3>".$artist_name.' - '.$song_title."</h3><br>";
		echo "<p>Album: $album_title</p>";
		echo "<img src='image/".$album_img."'>";
		echo "<p>Genre: $genre</p>";
		echo "<audio controls>";
			echo "<source src='audio/".$audio."' type='audio/mp3'>";
		echo "</audio></div>";
	}
	?>		
</div>