<?php
//testing echos
//echo "<p>player echo movie: $movie</p>\n";
//echo "<p>player echo directory: $mdir</p>\n";
//echo $_SESSION['dir'];

//check for and create the video div

if ($movie) {
echo "<div style=\"width:800px; margin:0 auto;\">";
echo "<video class=\"screen\" width=\"640\" height=\"480\" controls autoplay preload=\"metadata\">\n";
echo "	<source src=\"$homedir/$mdir/$movie\" type=\"video/mp4\">\n";
echo "Your browser does not support HTML5 video. Please upgrade.\n";
echo "</video>\n";
echo "</div>";
} else {
echo "<div class=\"width:800px; margin:0 auto;\">";
echo "<p>Please choose a movie</p>";
echo "</div>";
}
?>
