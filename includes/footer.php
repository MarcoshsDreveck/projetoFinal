<footer>
  <div class="footerContainer">
        <p>Copyright © 2016 - Marcos, José</p>
    <div class="footerRedesSociais">
      <ul>
        <li><a target="_blank" href="https://www.reddit.com/"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
</footer>
<script src="../lib/jquerry/jquery.js" type="text/javascript"></script>
<script>
/*Alterar menu ao rolar tela*/
$(document).ready(function($){
    var nav1 = $('.menu');
    var nav2 = $('.menuF');
    var nav3 = $('.redesSociais');
    var nav4 = $('.search');
    var nav5 = $('.menuSmartTop');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 10) {
            nav4.addClass("searchScroll");
            nav1.addClass("semMenu");
            nav2.addClass("menuFixo");
            nav3.addClass("semMenu");
            nav5.addClass("semMenu");
        } else {
            nav4.removeClass("searchScroll");
            nav1.removeClass("semMenu");
            nav2.removeClass("menuFixo");
            nav3.removeClass("semMenu");
            nav5.removeClass("semMenu");
        }
    });
});
/*Mostrar e fechar menu de dica*/
    $("#envieDicaSmart").click(function() {
      $('#envieDicaForm').show();
    });
    $("#envieDica").click(function() {
      $('#envieDicaForm').show();
    });
        $("#fecharDica").click(function() {
      $('#envieDicaForm').hide();
    });
/*Mostrar e fechar entre em contato*/
    $("#entreContato").click(function() {
      $('#entreContatoForm').show();
    });
        $("#fecharContato").click(function() {
      $('#entreContatoForm').hide();
    });
/*Mostrar e fechar seja um parceiro*/
    $("#sejaParceiro").click(function() {
      $('#sejaParceiroForm').show();
    });
        $("#fecharParceiro").click(function() {
      $('#sejaParceiroForm').hide();
    });
    /*menu smart*/
    $("#menuBtnSmart").click(function() {
      $('#idMenuSmart').show();
      });
      $("#menuClose").click(function() {
    $('#idMenuSmart').hide();
    });
    $("#idMenuSmartBlur").click(function() {
  $('#idMenuSmart').hide();
  });
  $("#enviarContato").click(function() {
    alert("Sua mensagem foi enviada com sucesso!");
    $('#entreContatoForm').hide();
  });
  $("#enviarParceiro").click(function() {
    alert("Seu pedido foi enviado com sucesso! Aguarde retorno.");
    $('#sejaParceiroForm').hide();
  });
  $("#enviarDica").click(function() {
    alert("Sua dica foi enviada com sucesso! Iremos avaliá-la.");
    $('#envieDicaForm').hide();
  });
</script>
</html>
