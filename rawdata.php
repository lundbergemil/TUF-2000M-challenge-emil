<?php

echo "<title>Home</title>";
include 'functions.php';


echo "<div id='layout'>";


echo "<div id='btnplacement'>";
	Button("HOME", "index.php");
	Button("FEED", "app.php");
	Button("FEED TEST", "apptestdata.php");
	Button("RAW DATA");
	Button("Extra", "extra.php");
echo "</div>"; //text


echo "<div id='component'>";

echo RawData();
	
	
echo "</div>"; //component




echo "</div>"; //layout

?>