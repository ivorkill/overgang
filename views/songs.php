<div id="songs">
	<?php
	foreach ($list as $songList){
		$song_title = $songList['title'];
		$song_id = $songList['id'];
		echo "<a href='?page=song_detail&song_id=$song_id'>".$song_title."</a>";
	    echo "<a href='?page=song_detail&song_id=$song_id'>Lees meer...</a>";
	}  	
	?>
</div>