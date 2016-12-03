<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Nome</title>
    <link href="../css/styles.css" type="text/css" rel="stylesheet" />
    <link href="../lib/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />

  </head>
<header>
  <!-- Formulário para enviar dica -->
  <div id="envieDicaForm" title="Envie sua dica">
    <form>
      <fieldset>
        <legend>Envie uma dica!</legend>
        <input type="text" name="name" id="name" class="dicaContentInput" placeholder="Digite seu nome..."><br />
        <input type="e-mail" name="email" id="email" class="dicaContentInput" placeholder="Digite seu e-mail..."><br />
        <input type="text" name="url" id="url" class="dicaContentInput" placeholder="Sua URL..."><br />
        <textarea type="text" name="comentario" id="comentario" class="dicaContentText" >Sua mensagem aqui... </textarea><br />
        <input type="button" class="btn" name = "enviar" id="enviarDica" value="Enviar">
        <input type="button" class="btn" name = "fechar" id="fecharDica" value="Fechar">
      </fieldset>
    </form>
  </div>
 <!-- Menu do site -->
  <div class="menuF">
    <div class="logotipo"></div>
    <nav class="menu">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="categorias.php">Categorias</a></li>
        <li><a href="#" id="envieDica">Envie uma dica</a></li>
        <li><a href="contatoinf.php">Contato</a></li>
      </ul>
    </nav>
<!-- Redes sociais -->
    <div class="redesSociais">
      <ul>
        <li><a target="_blank" href="https://www.reddit.com/"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
      </ul>
    </div>
    <div class="search /*searchScroll*/">
      <input type="search" placeholder="Search..."/><i class="fa fa-search" aria-hidden="true"></i>
    </div>
  </div>
</header>
