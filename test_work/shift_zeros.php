<?php
	$array  = array(1, 3, 6, 0, 9, 10, 7, 0, 0, 2, 1, 8, 0, 5);
	$first_array = array();
	$second_array = array();

	$init = 0;

	foreach($array as $key => $value){
		if($value > $init){
			$first_array[] = $value;
		}
		else{
			$second_array[] = $value;
		}
	}
	$final_array = array_merge($first_array,$second_array);
	echo '<pre>';print_r($final_array);

 ?>