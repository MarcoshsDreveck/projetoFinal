<?php
  include 'header.php';
  $x = $_GET['x'];
?>
<div class="conteudoMedia">
  <?php
    if ($x > 70){
      echo "<video autoplay controls width=\"100%\">";
      echo "<source src=\"../medias/$x.ogv\" type='video/ogg; codecs=\"theora, vorbis\"'/>";
      echo "<source src=\"../medias/$x.webm\" type='video/webm' >";
      echo "<source src=\"../medias/$x.mp4\" type='video/mp4'>";
      echo "</video>";
    }else{
      echo "<img src=\"../medias/$x.gif\" width=100% />";
    }
  ?>
  <div class="contShare">

      <div class="fb-share-button twRe" data-href="http://127.0.0.1/projetoFinal/includes/media.php?x=<?php echo $x; ?>" data-layout="button" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1/projetoFinal/includes/media.php?x=<?php echo $x; ?>;src=sdkpreparse"> <img src="../icons/icon_facebook_compartilhar.png" alt="submit to facebook" border="0" /></a></div>
      <div class="twRe"><a href="https://twitter.com/share" onclick="window.location = https://twitter.com/intent/tweet?original_referer=' + encodeURIComponent(window.location); return false"> <img src="../icons/tweet-button-2015.png" alt="submit to twitter" border="0" /> </a></div>
      <div class="twRe"><a href="//www.reddit.com/submit" onclick="window.location = '//www.reddit.com/submit?url=' + encodeURIComponent(window.location); return false"> <img src="../icons/spreddit7.gif" alt="submit to reddit" border="0" /> </a></div>
      <br /><input type="text" name="comp" id="comp" class="compInput" value="http://127.0.0.1/projetoFinal/includes/media.php?x=<?php echo $x; ?>">
      <p>Copie e cole em seu site</p>

  </div>
</div>
<div class="contSimilar">
  <div class="contQuadrado"><a href="media.php?x=<?php echo $rd = rand(1,78); ?>"><img src="../medias/<?php echo $rd; ?>.gif" width=100% /></a></div>
  <div class="contQuadrado"><a href="media.php?x=<?php echo $rd = rand(1,78); ?>"><img src="../medias/<?php echo $rd; ?>.gif" width=100% /></a></div>
  <div class="contQuadrado"><a href="media.php?x=<?php echo $rd = rand(1,78); ?>"><img src="../medias/<?php echo $rd; ?>.gif" width=100% /></a></div>
</div>
<div class="contSimilar">
  <div class="contQuadrado"><a href="media.php?x=<?php echo $rd = rand(1,78); ?>"><img src="../medias/<?php echo $rd; ?>.gif" width=100% /></a></div>
  <div class="contQuadrado"><a href="media.php?x=<?php echo $rd = rand(1,78); ?>"><img src="../medias/<?php echo $rd; ?>.gif" width=100% /></a></div>
  <div class="contQuadrado"><a href="media.php?x=<?php echo $rd = rand(1,78); ?>"><img src="../medias/<?php echo $rd; ?>.gif" width=100% /></a></div>
</div>
<?php
  include 'footer.php';
?>
