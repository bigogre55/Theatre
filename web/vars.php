<?php
//Set the Location of the video files on the webserver
//  leave off the root directory
//  if the root directory is /var/www and
//  the files are in /var/www/videos
//  just put /videos

$homedir = "/videos";

//Set the hard location of scanning
//  if the files are stored some where other than the
//  webserver directory, enter that full path here.
//  otherwise enter the full path to the web directory.
// /var/www/videos

$sdir = "/srv/films";


//Don't change these options
//_____________________________


$movie = $_GET['mov'];
if ($_GET['up']) {
  $sub = $_SESSION['dir'];
  $remove = strrpos($sub, "/", -2);
  $tdir = rtrim($sub, (basename($sub)));
  $mdir = substr($sub, 0, $remove);
  $sd = 1;
  $_SESSION['dir'] = $mdir;
} elseif ($_GET['dir']) {
  $sd = $_SESSION['dir'];
  $mdir = $sd . "/" . $_GET['dir'];
  $_SESSION['dir'] = $mdir;
  $sd = 1;
} else {
  $mdir = $_SESSION['dir'];
}

?>
