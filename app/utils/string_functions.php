<?php
setlocale(LC_ALL, 'en_US.UTF8');

//a function that capitalises words within the sentecnes to make it look much better
function strtotitle($title) {
	$blacklist = array( 'of','a','the','and', 'any', 'an','or','nor','but','is','then','else','at','from','by','on','off','for','in','out','over','to','into', 'that', 'with' );
	$words = explode(' ', $title);
	foreach ($words as $key => $word) {
		if ($key == 0 || !in_array($word, $blacklist))
			$words[$key] = ucfirst($word);
	} 
	$newtitle = implode(' ', $words);
	return $newtitle;
}

//a function that stick a full stop at the end of all sentences.
function finishyourfuckingsentences($string){
	if(substr($string, -1) == '!'){
		return $string;
	}else if(substr($string, -1) == '?'){
		return $string;
	}else if(substr($string, -1) != '.'){
		return $string .= '.';
	}
	else{
		return $string;
	}
}

//a function that helps make a URL for each of teh quotes
function slugify($str, $replace=array(), $delimiter='-') {
	if( !empty($replace) ) {
		$str = str_replace((array)$replace, ' ', $str);
	}
	$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

	return $clean;
}

?>