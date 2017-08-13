<?php
$file = 'rawDataLog.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a data to the file
$current .= "Date/time (GMT0):  " . GetRow(0) . "\n";
$current .= "Date/time (GMT0):  " . GetRow(0) . "\n";
// Write the contents back to the file
file_put_contents($file, $current);
?>