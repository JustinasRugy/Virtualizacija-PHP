<?php

$port = "193.219.91.103:";

if($fh = fopen('DBport.txt', 'r')) {
    while (!feof($fh)) {
        $line = fgets($fh);

    }
    fclose($fh);
}


$con = mysqli_connect($port+$line,"root","","ligonine");
if (mysqli_connect_error())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
