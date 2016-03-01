<div id="songs">
	<?php
	foreach ($list as $songList){
		$song_id = $songList['id'];
		$song_title = $songList['song_title'];
		$album_title = $songList['album_title'];
		$artist_name = $songList['artist_name'];
		$audio = $songList['audio'];
		echo "<p><a href='?page=song_detail&song_id=$song_id'>".$song_title." - ".$artist_name." ".$album_title."</a></p>";
	    echo "<a href='?page=song_detail&id=$song_id'>Lees meer...</a><br>";
	}  	
	?>
</div>