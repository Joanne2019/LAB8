<?php
include ("dbconnect.php");

$sql="SELECT * FROM marvelmovies WHERE productionStudio = 'Marvel Studios'";

$result = $db->query($sql);

if ($result->num_rows>0) {
    while ($row = $result->)
}