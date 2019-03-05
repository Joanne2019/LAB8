<?php

include ("dbconnect.php");

$sql = "SELECT * FROM marvelmovies WHERE yearReleased > 2000";

$result = $db->query($sql);

if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "year: " . $row["yearReleased"]. "; title: " . $row["title"]. "<br>";
    }
}
else {
   echo "0 results";
}
$db -> close();


?>