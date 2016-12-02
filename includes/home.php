<?php
  include 'header.php';
?>
<body>
  <div id="envieDicaForm" title="Envie sua dica">
    <form>
      <fieldset>
        <legend>Envie uma dica!</legend>
        <input type="text" name="name" id="name" class="dicaContentInput" placeholder="Digite seu nome..."><br />
        <input type="e-mail" name="email" id="email" class="dicaContentInput" placeholder="Digite seu e-mail..."><br />
        <input type="text" name="url" id="url" class="dicaContentInput" placeholder="Sua URL..."><br />
        <textarea type="text" name="comentario" id="comentario" class="dicaContentText" >Sua mensagem aqui... </textarea><br />
        <input type="button" class="btn" name = "enviar" id="enviar" value="Enviar">
        <input type="button" class="btn" name = "fechar" id="fechar" value="Fechar">
        <!-- Allow form submission with keyboard without duplicating the dialog button -->
      </fieldset>
    </form>
  </div>
  <!--criar php para adicionar videos e imagens e criar páginas imagem usar exp abaixo -->
  <div class="container">
      <div class="maisRecentes">
        <h1 class="tituloCat">Mais Recentes</h1>
        <div class="contNormal"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contNormal"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contQuadrado"><a href="media.php?x=<?php echo $rdV = rand(101,102); ?>"><img src="../medias/<?php echo $rdV; ?>.png" width=100% /></a></div>
        <div class="contNormal"><a href="media.php?x=<?php echo $rdV = rand(101,102); ?>"><img src="../medias/<?php echo $rdV; ?>.png" width=100% /></a></div>
        <div class="contNormal"><a href="media.php?x=<?php echo $rdV = rand(101,102); ?>"><img src="../medias/<?php echo $rdV; ?>.png" width=100% /></a></div>
        <div class="contQuadrado"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contNormal"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contNormal"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
      </div>
      <div class="maisVotados">
        <h1 class="tituloCat">Mais Votados</h1>
        <div class="contNormal"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contNormal"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contQuadrado"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contNormal"><a href="media.php?x=<?php echo $rdV = rand(101,102); ?>"><img src="../medias/<?php echo $rdV; ?>.png" width=100% /></a></div>
        <div class="contNormal"><a href="media.php?x=<?php echo $rdV = rand(101,102); ?>"><img src="../medias/<?php echo $rdV; ?>.png" width=100% /></a></div>
        <div class="contNormal"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contNormal"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
        <div class="contQuadrado"><a href="media.php?x=<?php echo $rdI = rand(1,2); ?>"><img src="../medias/<?php echo $rdI; ?>.gif" width=100% /></a></div>
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
