<?php
    //Hoe veel liedjes per pagina
    $items_per_page = 5;
    //Berekening vanaf welke pagination pagina hij moet beginnen
    $start_item = ($page_nr - 1) * $items_per_page;
	//Maak een array aan
	$list = array();
	//Get song query en welke liedjes er moeten worden opgehaald
	$sql = "SELECT * FROM songs INNER JOIN albums ON songs.album_id=albums.id JOIN artists ON songs.artist_id=artists.id LIMIT ".$start_item.",". $items_per_page;
	$result = $mysqli->query($sql);
    //Haal de resultaten op en plaats ze in een array
    while ($songsAlbum = $result->fetch_assoc()){
    	$list[] = $songsAlbum;
    }
    //Geef de rijen terug
    return $list;
    //Telt hoeveel pagina's er moeten zijn
    $total_rows = $list->num_rows;
    $total_pages = ceil($total_rows / $items_per_page);
?>