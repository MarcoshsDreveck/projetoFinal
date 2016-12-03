<?php
  include 'header.php';
?>
<body>
  <div class="infContatoMenu">
      <a href="#"><p id="entreContato">Entre em contato</p></a>
      <a href="#"><p id="sejaParceiro">Seja um parceiro</p></a>
  </div>
  <br />
  <div class="container">
    <h1 class="tituloCat">Contato</h1>
    <div class="infPessoais">
        <div class="imgContato"><img src="../medias/Bodeterno.jpg" width="100%"/></div>
          <div class="infContato">
            <h2>Marcos Dreveck</h2><br />
            <p>WhatsApp: (xx)9XXXX-XXXX</p>
            <br />
            <ul>
              <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
              <li><a target="_blank" href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
          </div>

    </div>
    <div class="infPessoais">
        <div class="imgContato"><img src="../medias/ze_contato.jpg" width="100%"/></div>
          <div class="infContato">
            <h2>José Miguel</h2><br />
            <p>WhatsApp: (xx)9XXXX-XXXX</p><br />
            <ul>
              <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
              <li><a target="_blank" href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
          </div>
    </div>
    <div class="sejaParceiro">
    </div>
  </div>
<!-- Formulário do entre em contato-->
  <div id="entreContatoForm" title="Envie sua dica">
      <form>
        <fieldset>
          <legend>Entre em contato!</legend>
          <input type="text" name="name" id="name" class="dicaContentInput" placeholder="Digite seu nome..."><br />
          <input type="e-mail" name="email" id="email" class="dicaContentInput" placeholder="Digite seu e-mail..."><br />
          <textarea type="text" name="comentario" id="comentario" class="dicaContentText" >Sua mensagem aqui... </textarea><br />
          <input type="button" class="btn" name = "enviar" id="enviarContato" value="Enviar">
          <input type="button" class="btn" name = "fechar" id="fecharContato" value="Fechar">
        </fieldset>
      </form>
  </div>
<!-- Formulário do seja um parceiro-->
    <div id="sejaParceiroForm" title="Envie sua dica">
      <form>
        <fieldset>
          <legend>Seja um parceiro</legend>
          <input type="text" name="name" id="name" class="dicaContentInput" placeholder="Digite seu nome..."><br />
          <input type="e-mail" name="email" id="email" class="dicaContentInput" placeholder="Digite seu e-mail..."><br />
          <input type="text" name="telefone" id="telefone" class="dicaContentInput" placeholder="Digite seu telefone..."><br />
          <textarea type="text" name="comentario" id="comentario" class="dicaContentText" >Sua mensagem aqui... </textarea><br />
          <input type="button" class="btn" name = "enviar" id="enviarParceiro" value="Enviar">
          <input type="button" class="btn" name = "fechar" id="fecharParceiro" value="Fechar">
        </fieldset>
      </form>
  </div>
</body>
<?php
  include 'footer.php';
?>
