<?php

echo "<title>Feed</title>";
echo "<meta http-equiv='refresh' content='".(60*4)."' URL='".$_SERVER['PHP_SELF']."'>";
include 'functions.php';
include 'math.php';



echo "<div id='layout'>";



echo "<div id='btnplacement'>";
	Button("HOME", "index.php");
	Button("FEED", "app.php");
	Button("FEED TEST");
	Button("RAW DATA", "rawdata.php");
	Button("EXTRA", "extra.php");
echo "</div>"; //text

echo "<div id='textDate'>";
	echo "All this data comes from the <a href='https://github.com/gambit-labs/tuf-2000m'>github page</a><br>";
echo "</div>"; //text

echo "<div id='component'>";
	

	StartList();

	AddListRow("Flow rate:  ", round(ConvertReal4(7579, 48988, true),2) ." m<sup>3</sup>/h");
	AddListRow("Tempareture inlet: ", round(ConvertReal4(15568, 16611),2) ."°C");
	AddListRow("Tempareture inlet: ", round(ConvertReal4(48792, 16166),2) ."°C");
	AddListRow("Negative energy accumulator: ", ConvertLong(65480, 65535));
	AddListRow("Signal quality:  ", ConvertInteger(806, 99));
	
	EndList();
echo "</div>"; //component





echo "</div>"; //layout


?>
