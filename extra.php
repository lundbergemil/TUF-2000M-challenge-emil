<?php

echo "<title>Home</title>";
include 'functions.php';


echo "<div id='layout'>";


echo "<div id='btnplacement'>";
	Button("HOME", "index.php");
	Button("FEED", "app.php");
	Button("FEED TEST", "apptestdata.php");
	Button("RAW DATA", "rawdata.php");
	Button("EXTRA");
echo "</div>"; //text


echo "<div id='component'>";

echo "<b>Had only time to make the flowrate icon, so here are some credits: </b><br>";

echo "<p>Tempareture & energy icons made by <a id='normal' href='https://www.flaticon.com/authors/yannick' title='Yannick'>Yannick</a> from <a href='https://www.flaticon.com/' title='Flaticon'>www.flaticon.com</a> is licensed by <a href='http://creativecommons.org/licenses/by/3.0/' title='Creative Commons BY 3.0' target='_blank'>CC 3.0 BY</a></p>" ;
echo "<p>Signal icon made by <a href='http://www.freepik.com' title='Freepik'>Freepik</a> from <a href='https://www.flaticon.com/' title='Flaticon'>www.flaticon.com</a> is licensed by <a href='http://creativecommons.org/licenses/by/3.0/' title='Creative Commons BY 3.0' target='_blank'>CC 3.0 BY</a></p>";	
	
echo "</div>"; //component




echo "</div>"; //layout

?>
