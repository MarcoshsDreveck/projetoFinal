<?php
  include 'header.php';
  $x = $_GET['x'];
if ($x > 100){
  echo "<div>";
  echo "<video autoplay controls width=500>";
  echo "<source src=\"../medias/$x.ogv\" type='video/ogg; codecs=\"theora, vorbis\"'/>";
  echo "<source src=\"../medias/$x.webm\" type='video/webm' >";
  echo "<source src=\"../medias/$x.mp4\" type='video/mp4'>";
  echo "</video>";
  echo "</div>";
}else{
  echo "<div>";
  echo "<div class=\"contNormal\"><img src=\"../medias/$x.gif\" width=100% /></div>";
  echo "</div>";
}
?>



<?php
  include 'footer.php';
?>
