<?php require"includes-acoes/rodape/rodape.php";?>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 widget footer-widget">
                <a class="footer-logo" href="index"><img src="images/logo-white.png" alt="Homely" /></a>
                <p>A plataforma digital que você anuncia e vende.</p>
                <div class="divider"></div>
                <ul class="social-icons circle">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
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
            <div class="col-lg-3 col-md-3 col-sm-4 widget footer-widget">
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
            <div class="col-lg-3 col-md-3 col-sm-12 widget footer-widget newsletter">
                <h4><span>Entre em contato</span> <img src="images/divider-half.png" alt="" /></h4>
                <p><b>Nossos horários</b></p>
                <p>Segunda - Sexta: 9h - 18h<br>
                    Sábados: 9h - 13h<br>
                    Domingo: Atendimento via email
                </p>
                <p class="footer-phone"><i class="fa fa-phone icon"></i> (11) 3785-0631</p>
            </div>
        </div><!-- end row -->
    </div><!-- end footer container -->
</footer>

<div class="bottom-bar">
    <div class="container">
    
    </div>
</div>