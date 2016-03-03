<div id="pagination">
	<?php
		//Ga naar de eerste Pagina
		echo "<a href='?page=songs&page_nr=1'>".'|<'."</a> ";
		//Ga naar de pagina's
        for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='?page=songs&page_nr=".$i."'>".$i."</a> "; 
        }; 
        //Ga naar de laatste pagina
        echo "<a href='?page=songs&page_nr=$total_pages'>".'>|'."</a> ";
    ?>
</div>