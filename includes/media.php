<?php
  include 'header.php';
  $x = $_GET['x'];
?>
<div class="conteudoMedia">
  <?php
    if ($x > 100){
      echo "<video autoplay controls width=\"100%\">";
      echo "<source src=\"../medias/$x.ogv\" type='video/ogg; codecs=\"theora, vorbis\"'/>";
      echo "<source src=\"../medias/$x.webm\" type='video/webm' >";
      echo "<source src=\"../medias/$x.mp4\" type='video/mp4'>";
      echo "</video>";
    }else{
      echo "<img src=\"../medias/$x.gif\" width=100% />";
    }
  ?>
</div>
<div class="contSimilar">
  <div class="contQuadrado"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
  <div class="contQuadrado"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
  <div class="contQuadrado"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>

</div>
<?php
  include 'footer.php';
?>
