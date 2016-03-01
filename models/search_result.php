<?php
$resultArray = array();// array voor de query output


$search = $_GET['q']; //let op niet beschermd tegen SQL injectie!!!
$type = $_GET['type']; //let op niet beschermd tegen SQL injectie!!!

$con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    exit();
}
mysqli_select_db($con,"overgang");
//dubbele wildcard
//$sql = "SELECT * FROM country WHERE name LIKE '%$search%' LIMIT 4";

//enkele wildcard
$sql = "SELECT * FROM songs WHERE song_title LIKE '$search%' ";
if ($type == "list"){
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)) {
        array_push($resultArray, $row['song_title']);
    }
    echo json_encode($resultArray);
}
if ($type == "answer"){
    $result = mysqli_query($con,$sql);
    echo "<table border = '1'>";
    echo "<tr><td>Country</td></tr>";
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<tr>";
            echo "<td>" . $row["song_title"] . "</td>";
            echo "<td>" . $row["Continent"] . "</td>";
            echo "<td>" . $row["Region"] . "</td>";
            echo "<td>" . $row["SurfaceArea"] . "</td>";
            echo "<td>" . $row["IndepYear"] . "</td>";
            echo "<td>" . $row["Population"] . "</td>";
            echo "<td>" . $row["Capital"] . "</td>";
            echo "<td>" . $row["HeadOfState"] . "</td>";
        echo "</tr>";
        }
    echo "</table>";
}
mysqli_close($con);
?>