<div id="pagination">
	<?php
	//Laat pagination zien
	for ($i=1; $i<=$total_pages; $i++) { 
	    echo "<a href='?page=songs&page_nr=".$i."'>".$i."</a> "; 
	};
	?>
</div>