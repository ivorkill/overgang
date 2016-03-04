<div id="featured">
	<h3>Featured:</h3><br>
	<?php
	for ($i=0; $i < 3; $i++) { 
		$j = mt_rand(0,99);
		$song_title = $list[$j]['song_title'];
		$song_id = $list[$j]['id'];
		$song_artist = $list[$j]['artist_name'];
		echo "<a href='?page=song_detail&song_id=$song_id'>".$song_title." - ".$song_artist."</a><br>";
		echo "<a href='?page=song_detail&song_id=$song_id'>Lees meer...</a><br><br>";	
	}
?>
</div>