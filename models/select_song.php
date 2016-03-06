<?php
    //Aantal items per pagina
    $num_rec_per_page=5;
    //Kijkt wel pagina nr hij heeft anders wordt het 1
    if (isset($_GET["page_nr"])) { 
        $page  = $_GET["page_nr"]; 
    } else { 
        $page=1; 
    };
    //Berekent waar hij moet beginnen
    $start_from = ($page-1) * $num_rec_per_page; 
	//Get song query en welke liedjes er moeten worden opgehaald
	$sql = "SELECT * FROM songs INNER JOIN albums ON songs.album_id=albums.id JOIN artists ON songs.artist_id=artists.id LIMIT ".$start_from.",". $num_rec_per_page;
	$result = $mysqli->query($sql);
    if($result->num_rows > 0){
            while($rows = $result->fetch_assoc()){
                $list[] = $rows;
            }
        }
    //Select query voor aantal items
    $sql = "SELECT * FROM songs";
    //Voert de query uit
    $rs_result = $mysqli->query($sql);
    //telt het aantal items
    $total_records =$rs_result->num_rows;
    //Berekend het aantal pagina's
    $total_pages = ceil($total_records / $num_rec_per_page);
?>