<?php
    //Hoe veel liedjes per pagina
    $items_per_page = 5;
    //Berekening vanaf welke pagination pagina hij moet beginnen
    $start_item = ($page_nr - 1) * $items_per_page;
	//Maak een array aan
	$list = array();
	//Get song query en welke liedjes er moeten worden opgehaald
	$sql = "SELECT * FROM songs LIMIT ".$start_item.",". $items_per_page;
    $result = $mysqli->query($sql);
    //Haal de resultaten op en plaats ze in een array
    while ($songs = $result->fetch_assoc()){
    	$list[] = $songs;
    }
    //Geef de rijen terug
    return $list;
    //Get song query en welke liedjes er moeten worden opgehaald
    $sql = "SELECT * FROM songs LIMIT ".$start_item.",". $items_per_page;
    $result = $mysqli->query($sql);
    //Telt hoeveel pagina's er moeten zijn
    $total_rows = $result->num_rows;
    $total_pages = ceil($total_rows / $items_per_page);
?>