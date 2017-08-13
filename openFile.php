<?php

$dataRow = array();

// Reads file into array
function ReadFeed(){
	$feedfile = fopen("http://tuftuf.gambitlabs.fi/feed.txt", "r") or die("Unable to open file!");

	global $dataRow;
	while(!feof($feedfile)) {
		$dataRow[] = fgets($feedfile);
	}
	fclose($feedfile);
}

// Get's the data from array dataRow (feed.txt)
function GetRow($num = 0){
	global $dataRow;
	// IF num is 0 or lower returns first line whitout formatting it 
	if ($num <= 0){
		return $dataRow[0];
	}
	$out = explode(':', $dataRow[$num]);
	return $out[1];
}

//Just returns the raw data
function RawData(){
	global $dataRow;
	$out = "";
	foreach($dataRow as $row){
		$out .= $row . "<br>";
	}
	return $out;
}


ReadFeed();

	//echo "<br>" . GetRow(33);
	
	
?>