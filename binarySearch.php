<?php

function binarySearch($needle, $array)
{
	$baixo = 0;
	$alto = count($array) - 1;

	while ($baixo <= $alto) {
		$meio = floor(($baixo + $alto) / 2);

		if ($array[$meio] == $needle) {
			return $meio;
		}

		if ($array[$meio] > $needle) {
			$alto = $meio - 1;
		} else {
			$baixo = $meio + 1;
		}
	}

	return null;
}

$array = [1, 3, 5, 7, 9];
echo binarySearch(3, $array) . "\n";
echo binarySearch(-1, $array) . "\n";