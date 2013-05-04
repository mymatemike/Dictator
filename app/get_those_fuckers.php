<?php
	require "app/db/db_connect.php";

	function strtotitle($title) {
        $blacklist = array( 'of','a','the','and','an','or','nor','but','is','then','else', 'at','from','by','on','off','for','in','out','over','to','into','with' );
        $words = explode(' ', $title);
        foreach ($words as $key => $word) {
                if ($key == 0 || !in_array($word, $blacklist))
                        $words[$key] = ucfirst($word);
        } 
        $newtitle = implode(' ', $words);
        return $newtitle;
}

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
			echo strtotitle($the_fucker);
		}else{
			$the_fucker = "<a href= '$fucker_link' target='_blank'>" . $the_fucker . "</a>";
			echo strtotitle($the_fucker);
		}
  	}
?>