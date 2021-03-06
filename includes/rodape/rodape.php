<?php require"includes-acoes/rodape/rodape.php";?>

<section class="module cta newsletter">
  <div class="container">
    <div class="row">
        <div class="col-lg-7 col-md-7">
            <h3>Precisa anunciar seu produto ou serviço?</h3>
            <p>A Liigo vai te ajudar a encontrar pessoas que precisam do seu produto ou serviço</p>
        </div>
        <div class="col-lg-5 col-md-5">
            <a href="anuncie" class="button branco large">Anuncie com a gente</a>
        </div>
    </div><!-- end row -->
  </div><!-- end container -->
</section>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 widget footer-widget">
                <a class="footer-logo" href="index"><img src="images/logo-white.png" alt="Homely" /></a>
                <p>A plataforma digital que você anuncia e vende.</p>
                <div class="divider"></div>
                <ul class="social-icons circle">
                    <li><a href="https://www.facebook.com/liigo.com.br/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/liigoanuncios/?hl=pt-br" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCOrXx2-X0nyT1ZXQHkDhgrQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    <!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 widget footer-widget newsletter">
                <h4><span>Newsletter</span> <img src="images/divider-half.png" alt="" /></h4>
                <p><b>Inscreva-se!</b> Receba diariamente anuncios de equipamentos, serviços e suprimentos.</p>
                <form class="subscribe-form" method="post" action="#news" id="news">
                    <label><b>Email</b></label>
                    <input type="email" name="emailnws" placeholder="Seu email." required />
                    <a id="news"></a>
                    <?php if($envionws=="s"){
                            echo $msgsnws;
                          }
                            ?>
                    <input type="submit" name="submit" value="Enviar" class="button small alt" />
                    <input name="envionws" type="hidden" id="envionws" value="s" />
                </form>
            </div>
            <!--<div class="col-lg-3 col-md-3 col-sm-4 widget footer-widget">
                <h4><span>Veja o que está em alta</span> <img src="images/divider-half.png" alt="" /></h4>

                <h5 style="color: #FFF; font-size: 15px;">HP anuncia nova linha de impressoras</h5>
                <p>Outubro 6.2018<br/>
                Nova linha será revolucionária.
                </p>

                <h5 style="color: #FFF; font-size: 15px;">XEROX de volta ao mercado</h5>
                <p>Outubro 6.2018<br/>
                Xerox promete reolucionar o mercado de impressão digital.
                </p>
                
            </div>
-->            <div class="col-lg-3 col-md-3 col-sm-12 widget footer-widget newsletter">
                <h4><span>Entre em contato</span> <img src="images/divider-half.png" alt="" /></h4>
                <p><b>Nossos horários</b></p>
                <p>Segunda à Sábado: 9h - 18h
                </p>
                <p class="footer-phone"><i class="fa fa-envelope"></i><a href="mailto:contato@liigo.com.br"> contato@liigo.com.br</a> </p>
            </div>
        </div><!-- end row -->
    </div><!-- end footer container -->
</footer>

<div class="bottom-bar">
    <div class="container">
    <p><a href="uploads/pdf/contrato-de-intermedicao-de-negocios-liigo.pdf" target="_blank">Termos e Condições de uso</a> | <a href="uploads/pdf/politica-de-privacidade.pdf" target="_blank">Política de Privacidade</a></p>
    <p>Liigo <?php echo date("Y")?> - Todos os direitos reservados</p>
    </div>
</div>