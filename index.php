<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvel movies</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="all.php">Display all movies</a></li>
            <li><a href="bymarvel.php">Display all movies created by marvel studios</a></li>
            <li><a href="after2010.php">Display all movies created after 2010</a></li>
            <li><a href="xmen.php">Display all X-men films</a></li>
        </ul>
    </nav>
</header>


<?php
include("dbconnect.php");
if ($db === false) {
    die ("Error: could not connect");
}

?>

</body>
</html>