<?php

$myfile = fopen("location.txt", "w")
$txt = "Lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"];
fwrite($myfile, $txt);
fclose($myfile);
  
>
