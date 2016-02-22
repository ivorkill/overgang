<div id="aside">
	<?php
		for ($i=0; $i < 3; $i++) { 
			$j = mt_rand(0,5);
			$song_title = $list[$j]['title'];
			$song_id = $list[$j]['id'];
			echo "<a href='?page=song_detail&song_id=$song_id'>".$song_title."</a> ";
		    echo "<a href='?page=song_detail&song_id=$song_id'>Lees meer...</a><br>";	
		}
	?>
</div>