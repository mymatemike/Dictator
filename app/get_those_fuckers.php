<?php
	require "app/db/db_connect.php";
	require "utils/string_functions.php";

	$dbconnect = NEW DB_Class('when_I_am_dictator', 'root', 'root');
	$query = "SELECT *  FROM wiad_fuckers WHERE is_live = 1 ORDER BY RAND() limit 0,1";
	$results = $dbconnect->fetch($query);

	foreach ($results as $value){
		//print_r($value);
		//var_dump($value);
		$thatfucker = $value['the_fucker'];

		$the_fucker = $value['the_fucker'];
  		$the_fucker = ucfirst(strtolower($the_fucker));

  		$fucker_link = $value['fucker_link'];
		if (is_null($fucker_link) || $fucker_link == ""){
			$str = finishyourfuckingsentences($the_fucker);
			$str = strtotitle($str);
			//$str .= "id='thedictator' Mike Hill";
			echo $str;
		}else{
			$str = finishyourfuckingsentences($the_fucker);
			$str = strtotitle($str);
			$str = "<a href= '$fucker_link' target='_blank'>" . $str . "</a>";
			echo $str;
		}
  	}
?>