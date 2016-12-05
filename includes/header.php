<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>MemeLand</title>
    <link href="../css/styles.css" type="text/css" rel="stylesheet" />
    <link href="../css/max1200.css" type="text/css" rel="stylesheet" />
    <link href="../css/max500.css" type="text/css" rel="stylesheet" />
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
    <a href="home.php"><div class="logotipo"></div></a>
    <nav class="menu">
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="categorias.php">Categorias</a></li>
        <li><a href="#" id="envieDica">Envie uma dica</a></li>
        <li><a href="contatoinf.php">Contato</a></li>
      </ul>
    </nav>
    <!-- Menu do site em smartphone -->
    <div class="menuSmartTop">
      <ul>
        <li><a href="#" id="envieDicaSmart"><i class="fa fa-upload" aria-hidden="true"></i></a></li>
        <li><a href="#"id="menuBtnSmart"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a></li>
      </ul>
    </div>
    <!-- Redes sociais -->
    <div class="redesSociais">
      <ul>
        <li><a target="_blank" href="https://www.reddit.com/"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
      </ul>
    </div>
    <!-- Menu do site em smartphone -->
    <nav id="idMenuSmart" class="menuSmart">
      <div id="menuClose"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></div>
      <div id="idMenuSmartBlur" class="menuSmartBlur"></div><!--fecha menu-->
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="categorias.php">Categorias</a></li>
        <li class="catSub"><a href="catVid.php">Videos / Vines</a></li>
        <li class="catSub"><a href="catImg.php">Gifs / Imgs</a></li>
        <li><a href="contatoinf.php">Contato</a></li>
      </ul>
      <!-- top parceiros no menu do site em smartphone -->
      <div class="topParceirosSmart">
        <h1 id="parceirosSmart">TOP parceiros</h1>
            <div class="imgParceiroSmart"><a href="contatoinf.php"></a></div>
            <div class="imgParceiroSmart"><a href="contatoinf.php"></a></div>
            <div class="imgParceiroSmart"><a href="contatoinf.php"></a></div>
            <div class="imgParceiroSmart"><a href="contatoinf.php"></a></div>
            <div class="imgParceiroSmart"><a href="contatoinf.php"></a></div>
            <div class="imgParceiroSmart"><a href="contatoinf.php"></a></div>
            <div class="imgParceiroSmart"><a href="contatoinf.php"></a></div>
            <div class="imgParceiroSmart"><a href="contatoinf.php"></a></div>
      </div>
    </nav>
    <div class="search /*searchScroll*/">
      <input type="search" placeholder="Search..."/><i class="fa fa-search" aria-hidden="true"></i>
    </div>
  </div>
</header>
