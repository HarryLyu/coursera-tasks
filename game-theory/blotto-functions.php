<?php


function battle($s1, $s2) {
	$w1 = split(' ', $s1);
	$w2 = split(' ', $s2);

	$p1 = 0;
	$p2 = 0;

	foreach ($w1 as $field => $warriorsCount) {
		if ($w1[$field] > $w2[$field]) {
			$p1 += 1;
		} elseif ($w1[$field] < $w2[$field]) {
			$p2 += 1;
		} else {
			$p1 += 0.5;
			$p2 += 0.5;
		}
	}

	//echo "$s1 vs $s2 = $p1 / $p2" . PHP_EOL;

	return [$p1, $p2];
}


function generateStrategy($sum = 100) {
	$s = [];
	
	for ($i = 0; $i < 10; $i++) {
		do {
			$s[$i] = rand(0, $sum * 0.5);
		} while (array_sum($s) > $sum);
	}

	return join(' ', $s);
}

