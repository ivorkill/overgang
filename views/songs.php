<div id="songs">
	<?php
	foreach ($list as $songList){
		$song_id = $songList['id'];
		$song_title = $songList['song_title'];
		$album_title = $songList['album_title'];
		$artist_name = $songList['artist_name'];
		echo "<a href='?page=song_detail&song_id=$song_id'>".$song_title."</a>";
		echo "<p> - ".$artist_name." ".$album_title."</p>";
	    echo "<a href='?page=song_detail&song_id=$song_id'>Lees meer...</a><br>";
	}  	
	?>
</div>