<?php



function ConvertReal4($low, $high, $flip = false) {
	$low = (int)$low;
	$high = (int)$high;
	// Bitshifts data and adds together high and low
	if ($flip == false)
		$shifted = ($high << 16) | ($low);
	else
		$shifted = ($low << 16) | ($high);
	// Unpacks the value into a float
	$unpacked = unpack("f", pack("i", $shifted))[1];
	//var_dump(unpack("f", pack("i", $shifted)));
	return $unpacked;
}

function ConvertLong($low, $high, $flip = false) {
	$low = (int)$low;
	$high = (int)$high;
	// Bitshifts data and adds together high and low
	if ($flip == false)
		$shifted = ($high << 16) | ($low);
	else
		$shifted = ($low << 16) | ($high);
	//var_dump(is_int($shifted));
	// Unpacks the value into a integer
	$unpacked = unpack("l", pack("i", $shifted))[1];
	//var_dump(is_long($unpacked));
	return sprintf("%d\n", $unpacked);
	//return $unpacked;
}

function ConvertInteger($low, $high = 99, $flip = false) {
	$low = (int)$low;
	$high = (int)$high;
	// Bitshifts data and adds together high and low
	if ($flip == false)
		$shifted = ($high << 16) | ($low);
	else
		$shifted = ($low << 16) | ($high);
	// Unpacks the value into a char
	return unpack("C", pack("i", $shifted))[1];
}

// could not get bcd to work



?>