<?php

$sql = 'SELECT * FROM usersma ORDER BY RAND() LIMIT 1' ;
$result = mysqli_query($conn, $sql);
$usere = mysqli_fetch_all($result, MYSQLI_ASSOC);