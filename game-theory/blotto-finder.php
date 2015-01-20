<?php
include 'blotto-functions.php';

$S = [];

$S[] = '98 1 0 0 0 0 0 0 1';
$S[] = '0 95 1 1 1 1 1 0 0';
$S[] = '20 20 30 20 10 0 0 0 0';

//1 0 0 0 0 0 0 0,5 1

$payments = [0, 0, 0];
$battles = [];

$games = ['1vs2', '1vs3', '2vs3'];

foreach ($games as $game) {

	$players = split('vs', $game);
	$result = battle($S[$players[0] - 1], $S[$players[1] - 1]);

	$payments[$players[0]] += $result[0];
	$payments[$players[1]] += $result[1];
}

print_r($payments);