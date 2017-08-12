<!DOCTYPE html>
<html>
<head>
<?php
require_once("session_start.php");
include('vars.php');
?>
<title>Theater</title>
<link rel="stylesheet" type="text/css" href="movie_style.css">
<link rel="stylesheet" type="text/css" href="../jake.css">
</head>
<body>
<t1><a href=clear.php">Home</a></t1>
<p>this portion of the site is still in testing.</p>
<p>Please be aware that you will find bugs and encounter errors.</p>
<p>you can always start over by clicking the link above</p>
<hr>
<?php
include('player.php');
?>
<hr>
<p>Here is the Drectory of movies. Choose one, and it will begin to play above.</p>
<hr>
<div class="scroll">
<table>
<?php
$files = scandir("$sdir$mdir");

if ($sd) {
	echo "<tr>\n";
        echo "\t<td><a href=\"index.php?up=1\"> . . </a></td>\n";
        echo "</tr>\n";
        }

foreach ($files as $i) {
   $h = strpos($i,".");
	if ($h === 0) {
//		Do Nothing.
	} elseif ($h > 0) {
        echo "<tr>\n";
        echo "\t<td><a href=\"index.php?mov=$i\">$i</a></td>\n";
        echo "</tr>\n";
	} else {
	echo "<tr>\n";
	echo "\t<td><a href=\"index.php?dir=$i\">$i</a></td>\n";
	echo "</tr>\n";
	}
}
?>
</table>
</div>
<hr>
<p>Created by Bigogre55/jaketheogre © 2017</p>
</body>
</html>
