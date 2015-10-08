<?php
	$start = microtime(true);

	$array = array();

	for($q = 0; $q < 100; $q++){
		array_push($array, rand(0,10000));
	}

	var_dump($array);

	for($j = 1; $j < count($array); $j++){
		$mover = $array[$j];
		while($j > 0){
			if($array[$j] < $array[$j-1]){
				$array[$j] = $array[$j-1];
				$array[$j-1] = $mover;
				$j -= 1;
			}
			else{
				break;
			}
		}	
	}
	var_dump($array);
	$end = microtime(true);
	$time = $end - $start;
	echo 'PHP took '.$time.' second(s) to sort the array!';

?>