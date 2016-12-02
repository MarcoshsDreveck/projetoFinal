<?php
  include 'header.php';

  $rdV = rand(101,102);

?>
<body>
  <!--criar php para adicionar videos e imagens e criar páginas imagem usar exp abaixo -->
  <div class="container">
      <div class="maisRecentes">
        <h1 class="tituloCat">Mais Recentes</h1>
        <div class="contNormal"><a href="img.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contNormal"><a href="img.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contQuadrado"><a href="vid.php?x=<?php echo $rdV = rand(101,102); ?>"><img src="../medias/<?php echo $rdV; ?>.png" width=100% /></a></div>
        <div class="contNormal"><a href="vid.php?x=<?php echo $rdV = rand(101,102); ?>"><img src="../medias/<?php echo $rdV; ?>.png" width=100% /></a></div>
        <div class="contNormal"><a href="vid.php?x=<?php echo $rdV = rand(101,102); ?>"><img src="../medias/<?php echo $rdV; ?>.png" width=100% /></a></div>
        <div class="contQuadrado"><a href="img.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contNormal"><a href="img.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contNormal"><a href="img.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
      </div>
      <div class="maisVotados">
        <h1 class="tituloCat">Mais Votados</h1>
        <div class="contNormal"><a href="img.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contNormal"><a href="img.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contQuadrado"><a href="img.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contNormal"><a href="vid.php?x=<?php echo $rdV = rand(101,102); ?>"><img src="../medias/<?php echo $rdV; ?>.png" width=100% /></a></div>
        <div class="contNormal"><a href="vid.php?x=<?php echo $rdV = rand(101,102); ?>"><img src="../medias/<?php echo $rdV; ?>.png" width=100% /></a></div>
        <div class="contNormal"><a href="img.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contNormal"><a href="img.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contQuadrado"><a href="img.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>


      </div>
      <div class="topParceiros">
        <h1 id="destaqueTop">TOP</h1>
        <h1 class="tituloCat">Parceiros</h1>
            <div class="imgParceiro"><a href="#"></a></div>
            <div class="imgParceiro"><a href="#"></a></div>
            <div class="imgParceiro"><a href="#"></a></div>
            <div class="imgParceiro"><a href="#"></a></div>
            <div class="imgParceiro"><a href="#"></a></div>
            <div class="imgParceiro"><a href="#"></a></div>
            <div class="imgParceiro"><a href="#"></a></div>
            <div class="imgParceiro"><a href="#"></a></div>
            <div class="imgParceiro"><a href="#"></a></div>
            <div class="imgParceiro"><a href="#"></a></div>
      </div>
  </div>
</body>

<?php
  include 'footer.php';
?>
