<footer>
  <div class="footerContainer">
        <p>Copyright © 2016 - Marcos, José</p>
    <div class="footerRedesSociais">
      <ul>
        <li><a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
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
    $(window).scroll(function () {
        if ($(this).scrollTop() > 10) {
            nav4.addClass("searchScroll");
            nav1.addClass("semMenu");
            nav2.addClass("menuFixo")
            nav3.addClass("semMenu");
        } else {
            nav4.removeClass("searchScroll");
            nav1.removeClass("semMenu");
            nav2.removeClass("menuFixo")
            nav3.removeClass("semMenu");
        }
    });
});

</script>
</html>
