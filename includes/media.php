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
  <div class="contShare">
    <div id="fb-root"></div>
      <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      <div class="fb-share-button" data-href="http://127.0.0.1/projetoFinal/medias/<?php echo $x; ?>.gif" data-layout="button" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Compartilhar</a></div>
      <div class="twRe"><a href="https://twitter.com/share" class="twitter-share-button " data-url="http://127.0.0.1/projetoFinal/medias/<?php echo $x; ?>.gif">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div>
      <div class="twRe"><a href="//www.reddit.com/submit" onclick="window.location = '//www.reddit.com/submit?url=' + encodeURIComponent(window.location); return false"> <img src="//www.redditstatic.com/spreddit7.gif" alt="submit to reddit" border="0" /> </a></div>
      <br /><input type="text" name="comp" id="comp" class="compInput" value="http://127.0.0.1/projetoFinal/medias/<?php echo $x; ?>.gif">
      <p>Copie e cole em seu site</p>

  </div>
</div>
<div class="contSimilar">
  <div class="contQuadrado"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
  <div class="contQuadrado"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
  <div class="contQuadrado"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
</div>
<div class="contSimilar">
  <div class="contQuadrado"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
  <div class="contQuadrado"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
  <div class="contQuadrado"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
</div>
<?php
  include 'footer.php';
?>
