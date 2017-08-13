<?php

include 'openFile.php';
echo '<link rel="stylesheet" type="text/css" href="style.css">';


function StartList() {
	echo "<table>";
}

function EndList() {
	echo "</table>";
}

function AddListRow($label, $data, $icon = null) {
	echo "
	<tr>
		<td style='align-content: center; width: 40px'>". Icon($icon) ."</td>
		<td style='text-align: right; width: 150px'>". 	$label ."</td>
		<td style='width: 80px; text-indent: 4px'>". 	$data ."</td>
	</tr>
	";
}
function AddLine() {
	echo "
	<tr>
		<td colspan='3' style='width: 100%; border-bottom: 1px solid gray'></td>
	</tr>
	";
}

function Icon($img){
	if ($img == null)
		return "";
	return "<img src='img/".$img.".svg' >";
}

function Button($text, $link = null){
	if ($link != null){
		echo "
		<a id='btn' href='". $link ."'>
			". $text ."
		</a>
		";
	}
	else
	{
		echo "
		<div id='btnDisabled'>
			<label class='unselectable'>". $text ."</label>
		</div>
		";
		
		
	}
		
}

?>