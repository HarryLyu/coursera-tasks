<?php
include 'blotto-functions.php';

$s = '18 1 2 21 11 22 10 6 4 5';
$moves = 100000;
$winCount = 0;

for ($i = 0; $i < $moves; $i++) {
	$strategy = generateStrategy();

	$result = battle($s, $strategy);

	if ($result[0] > $result[1]) {
		$winCount += 1;
	}

}

print_r($winCount);
echo PHP_EOL;
echo PHP_EOL;