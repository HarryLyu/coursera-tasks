<?php
include 'blotto-functions.php';

$moves = 1000;

$S = [];

for ($i = 0; $i < $moves; $i++) {
	$strategy = generateStrategy();
	$S[$strategy] = 0;
}

for ($i = 0, $c = count($moves); $i < $c; $i++) {
	$s = $S[$i];

	for ($j = 0; $j < $c; $j++) {
		$s1 = $S[$j];

		$result = battle($s, $s1);

		if ($result[0] > $result[1]) {
			$winCount += 1;
		}
	}
}


$maxValue = max($S);

$key = array_search($maxValue, $S);

print_r($key);
echo PHP_EOL;
echo PHP_EOL;
