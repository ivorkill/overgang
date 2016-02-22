<div id="songs">
	<?php
	foreach ($list as $songList){
		$song_title = $songList['title'];
		$song_id = $songList['id'];
		echo $song_id.' '.$song_title;
	    echo "<a href='?url=song_detail&song_id=$song_id'>Lees meer...</a>";
	}  	
	?>
</div>