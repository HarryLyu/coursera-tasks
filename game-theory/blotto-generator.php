<?php
include 'blotto-functions.php';

$moves = 1000;

$S = [];

for ($i = 0; $i < $moves; $i++) {
	$strategy = generateStrategy();
	$S[$strategy] = 0;
	
	for ($j = 0; $j < $moves; $j++) {
		$strategyVersus = generateStrategy();

		$result = battle($strategy, $strategyVersus);

		if ($result[0] > $result[1]) {
			$S[$strategy] += 1;
		}
	}
}

$maxValue = max($S);

$key = array_search($maxValue, $S);

print_r($key);
echo PHP_EOL;
echo PHP_EOL;
