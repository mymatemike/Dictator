<?php
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
?>