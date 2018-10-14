<?php

$contestants = array(
"Sam" => '',
"Eliot" => '',
":iz" => '',
"Max" => ''
);

$winner_count = 0;

foreach ($_POST as $key => $value) {
	$coin_flip = rand(0,1);
	if ($coin_flip == 1) {
		$contestants[$value] = "Winner";

		$winner_count++;

	}

	else{
		$contestants[$value] = "Loser";
	}
}
