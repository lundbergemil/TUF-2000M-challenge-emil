<?php

include 'openFile.php';
include 'math.php';

$file = 'feedlog.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a data to the file
$current .=  "\r\n";
$current .=  GetRow(0) . "	";
$current .=  round(ConvertReal4(GetRow(1), GetRow(2)), 2) . "		";
$current .=  round(ConvertReal4(GetRow(3), GetRow(4)), 2) . "			";
$current .=  round(ConvertReal4(GetRow(7), GetRow(8)), 2) . "			";
$current .=  round(ConvertReal4(GetRow(83), GetRow(84)), 2) . "				";
$current .=  round(ConvertReal4(GetRow(85), GetRow(86),true), 2) . "				";
$current .=  ConvertLong(GetRow(17), GetRow(18), true) . "			";
$current .=  ConvertLong(GetRow(21), GetRow(22)) . "			";
$current .=  round(ConvertReal4(GetRow(33), GetRow(34), true), 2) . "			";
$current .=  round(ConvertReal4(GetRow(35), GetRow(36), true), 2) . "			";
$current .=  ConvertInteger(GetRow(92), 99, true) . "		";
$current .=  round(ConvertReal4(GetRow(99), GetRow(100), true),2) . "			";
// Write the contents back to the file
file_put_contents($file, $current);



?>