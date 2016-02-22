<div id="song_detail">
	<?php
		echo "<div id='left_song'><a href='?page=song_detail&song_id=".$previous_song['id']."'>".utf8_encode($previous_song['song_title'])."</a></div>";
		echo "<div id='right_song'><a href='?page=song_detail&song_id=".$next_song['id']."'>".utf8_encode($next_song['song_title'])."</a></div>";
		echo "<div id='main_song'><p>".$current_song['id'].' '.$current_song['song_title']."</p></div>";
	?>
</div>