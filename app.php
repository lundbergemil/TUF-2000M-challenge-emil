<?php

echo "<title>Feed</title>";
echo "<meta http-equiv='refresh' content='".(60*4)."' URL='".$_SERVER['PHP_SELF']."'>";
include 'functions.php';
include 'math.php';



echo "<div id='layout'>";



echo "<div id='btnplacement'>";
	Button("HOME", "index.php");
	Button("FEED");
	Button("FEED TEST", "apptestdata.php");
	Button("RAW DATA", "rawdata.php");
	Button("Extra", "extra.php");
echo "</div>"; //text

echo "<div id='textDate'>";
	echo "Date/time (GMT0):  " . GetRow(0) . "<br>";
echo "</div>"; //text

echo "<div id='component'>";

	StartList();
	
	AddListRow("Flow rate:  ", round(ConvertReal4(GetRow(1), GetRow(2)), 2) ." m<sup>3</sup>/h", "flowrate");
	AddListRow("Energy Flow rate: ", round(ConvertReal4(GetRow(3), GetRow(4)), 2) ." GJ/h");
	AddListRow("Fluid sound speed: ", round(ConvertReal4(GetRow(7), GetRow(8)), 2) ." m/s");
	AddListRow("Upstream travel time: ", round(ConvertReal4(GetRow(83), GetRow(84)), 2) ." ms");
	AddListRow("Downstream travel time: ", round(ConvertReal4(GetRow(85), GetRow(86),true), 2) ." ms");
	AddLine();
	AddListRow("Positive energy accumulator:  ", ConvertLong(GetRow(17), GetRow(18), true)." GJ", "energy");
	AddListRow("Negative energy accumulator:  ", ConvertLong(GetRow(21), GetRow(22))." GJ");
	AddLine();
	AddListRow("Temperature inlet:  ", round(ConvertReal4(GetRow(33), GetRow(34), true), 2) ."°C", "temp");
	AddListRow("Temperature outlet:  ", round(ConvertReal4(GetRow(35), GetRow(36), true), 2) ."°C");
	AddLine();
	AddListRow("Signal quality:  ", ConvertInteger(GetRow(92), 99, true), "signal");
	AddListRow("Reynolds number:  ", round(ConvertReal4(GetRow(99), GetRow(100), true), 2));

	EndList();
echo "</div>"; //component





echo "</div>"; //layout

LogData();

//Had no time to set up a script for running this, so it only logs when a user visits the site
function LogData(){
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
}


?>