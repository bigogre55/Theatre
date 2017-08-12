<?php
//clear all the session variables and return home
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
session_regenerate_id(true);
unset($mdir, $tdir, $homedir);
header("Location: https://movies.jaketheogre.com/test/");
?>
