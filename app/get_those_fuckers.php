<?php
require "app/db/db_connect.php";
require "utils/string_functions.php";

$dbconnect = NEW DB_Class('when_I_am_dictator', 'root', 'root');

if(isset($_GET['slug'])){
	//if a slug is set in the URL then go get the right one
	$query = "SELECT *  FROM wiad_fuckers WHERE is_live = 1 AND the_fucker_slug = \"" . mysql_real_escape_string($_GET['slug']) . "\" limit 0,1";
}else{
	//else get a random one
	$query = "SELECT *  FROM wiad_fuckers WHERE is_live = 1 ORDER BY RAND() limit 0,1";
}

$results = $dbconnect->fetch($query);


foreach ($results as $value){
	//print_r($value);
	//var_dump($value);
	$thatfucker = $value['the_fucker'];
	$the_fucker = $value['the_fucker'];
	$the_fucker = ucfirst(strtolower($the_fucker));
	//$the_fucker = slugify($the_fucker);
	//echo $the_fucker . "<br><br>";

	$fucker_link = $value['fucker_link'];
	if (is_null($fucker_link) || $fucker_link == ""){
		$str = finishyourfuckingsentences($the_fucker);
		$str = strtotitle($str);
	}else{
		$str = finishyourfuckingsentences($the_fucker);
		$str = strtotitle($str);
		$str = "<a href= '$fucker_link' target='_blank'>" . $str . "</a>";
	}
	echo $str;
	//echo slugify($the_fucker);
}


?>