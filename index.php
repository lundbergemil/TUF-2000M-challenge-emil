<?php

echo "<title>Home</title>";
include 'functions.php';


echo "<div id='layout'>";


echo "<div id='btnplacement'>";
	Button("HOME");
	Button("FEED", "app.php");
	Button("FEED TEST", "apptestdata.php");
	Button("RAW DATA", "rawdata.php");
	Button("Extra", "extra.php");
echo "</div>"; //text


echo "<div id='component'>";

echo "
	<br>
	This is a website that displays data coming from a <br> TUF-2000M ultrasonic energy meter. <br>
	<br><br><br><br>
	<br> Made by Emil L. <br>
";
	
	
echo "</div>"; //component




echo "</div>"; //layout

?>