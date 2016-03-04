<?php
$servername = "localhost";
$database = "overgang";
$uid = "root";
$pwd = "";
//Array voor de query output
$resultArray = array();


$search = $_GET['q']; //let op niet beschermd tegen SQL injectie!!!
$type = $_GET['type']; //let op niet beschermd tegen SQL injectie!!!
//Db connectie
$con = mysqli_connect($servername,$uid,$pwd,$database);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    exit();
}
mysqli_select_db($con,"overgang");

//enkele wildcard
$sql = "SELECT * FROM songs JOIN artists ON songs.artist_id = artists.id  JOIN albums ON songs.album_id = albums.id WHERE song_title COLLATE UTF8_GENERAL_CI LIKE '$search%' LIMIT 5";
if ($type == "list"){
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)) {
        array_push($resultArray, $row['song_title']);
    }
    echo json_encode($resultArray);
}
if ($type == "answer"){
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
           echo "<a href='?page=song_detail&song_id=".$row['id']."'>".$row['song_title']." - ".$row['artist_name']."</a>";
        }
}
mysqli_close($con);
?>