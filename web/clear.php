<?php
//clear all the session variables and return home
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);
unset($mdir, $tdir, $homedir);

$host = $_SERVER['HTTP_HOST'];
$url = $_SERVER['REQUEST_URI'];

if ($url) {
	$pos = strpos($url, "/", 2);
	$uri = substr($url, 0, $pos);
}

header("Location: https://$host$uri");
?>
