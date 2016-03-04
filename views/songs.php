<div id="songs">
	<h2>Alle songs</h2><br>
	<?php
	foreach ($list as $songList){
		$song_id = $songList['id'];
		$song_title = $songList['song_title'];
		$album_title = $songList['album_title'];
		$artist_name = $songList['artist_name'];
		$audio = $songList['audio'];
		echo "<p>".$song_title." - ".$artist_name."</p>";
		echo "<p>Album: ".$album_title."</p>";
	    echo "<a href='?page=song_detail&song_id=".$song_id."'>Lees meer...</a><br><br>";
	}	
	?>
</div>