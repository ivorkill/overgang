<div id="songs">
	<?php
		foreach ($songs as $songList) {
			$songs_id = $songsList['id'];
        	$songs_title = $songsList['songs_title'];
        	echo "<h2>$news_title</h2>";
	        echo "<a href='?url=songs&id=$songs_id'>Lees meer...</a>";
		}
	?>
</div>