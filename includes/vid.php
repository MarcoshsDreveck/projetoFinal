<?php
  include 'header.php';

  $x = $_GET['x'];
//criar uma página somente com um if para identificar o tipo de midia
?>
<div>
<video autoplay controls width=500>
  <source src="../medias/<?php echo $x; ?>.ogv" type='video/ogg; codecs="theora, vorbis"'/>
  <source src="../medias/<?php echo $x; ?>.webm" type='video/webm' >
  <source src="../medias/<?php echo $x; ?>.mp4" type='video/mp4'>
</video>

<?php
  include 'footer.php';
?>
