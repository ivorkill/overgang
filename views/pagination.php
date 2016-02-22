<div id="pagination">
	<?php
	//Ga naar de eerste pagina
	echo "<a href='?page=songs&page_nr=1'>".'1 |'."</a> ";
	//Laat pagination zien
	for ($i=1; $i<=$total_pages; $i++) { 
	    echo "<a href='?page=songs&page_nr=".$i."'>".$i."</a> "; 
	};
	//Ga naar de laatste pagina
	echo "<a href='?page=songs&page_nr=".$total_pages."'>".$total_pages."</a> ";
	?>
</div>