<?php 


setcookie('accept_cookie', true, time() + 365*24*3600, '/', null, false, true);

if(isset($_SERVER['HTTP_REFERER']) AND !empty($_SERVER['HTTP_REFERER'])){ // empty : variable vide :!isset
	header('Location:'.$_SERVER['HTTP_REFERER']);
}else{
	header('Location:');
}


?>

// nom, valeur du cookie, date exp, chemin d'accés du cookie, specifier un domaine pour lequel le cookie est dispo, securite