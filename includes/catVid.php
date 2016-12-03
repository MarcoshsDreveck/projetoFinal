<?php
  include 'header.php';
?>
<body>
<div class="container">
  <div class="categoriaVid">
    <h1 class="tituloCat"><a href="#">Videos / Vines</a></h1><br />
    <p class="descCat"><a href="#">Animação</a></p>
    <p class="descCat"><a href="#">Animais</a></p>
    <p class="descCat"><a href="#">Animes</a></p>
    <p class="descCat"><a href="#">Arte</a></p>
    <p class="descCat"><a href="#">Artistas</a></p>
    <p class="descCat"><a href="#">Blogs e Pessoas</a></p>
    <p class="descCat"><a href="#">Cartoon</a></p>
    <p class="descCat"><a href="#">Ciência e Tecnologia</a></p>
    <p class="descCat"><a href="#">Cinema</a></p>
    <p class="descCat"><a href="#">Esportes</a></p>
    <p class="descCat"><a href="#">Entretenimento</a></p>
    <p class="descCat"><a href="#">Games</a></p>
    <p class="descCat"><a href="#">Humor</a></p>
    <p class="descCat"><a href="#">Motores</a></p>
    <p class="descCat"><a href="#">Música</a></p>
    <p class="descCat"><a href="#">Notícias</a></p>
    <p class="descCat"><a href="#">Publicidade</a></p>
    <p class="descCat"><a href="#">Reações</a></p>
    <p class="descCat"><a href="#">Viagens e Lugares</a></p>
    <p class="descCat"><a href="#">Vida e Lazer</a></p><br />
  </div>
  <div class="conteudoVid">
    <div class="contNormal">
      <div class="contQuadrado"><a href="media.php?x=<?php echo $rd = rand(71,78); ?>"><img src="../medias/<?php echo $rd; ?>.gif" width=100% /></a></div>
      <div class="contQuadrado"><a href="media.php?x=<?php echo $rd = rand(71,78); ?>"><img src="../medias/<?php echo $rd; ?>.gif" width=100% /></a></div>
    </div>
    <div class="contNormal">
      <div class="contQuadrado"><a href="media.php?x=<?php echo $rd = rand(71,78); ?>"><img src="../medias/<?php echo $rd; ?>.gif" width=100% /></a></div>
      <div class="contQuadrado"><a href="media.php?x=<?php echo $rd = rand(71,78); ?>"><img src="../medias/<?php echo $rd; ?>.gif" width=100% /></a></div>
    </div>


  </div>
</div>
</body>
<?php
  include 'footer.php';
?>
