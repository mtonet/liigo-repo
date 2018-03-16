<?php
session_start();
//conn
require"conn/exe.php";
//regras
require"includes-acoes/regras/regras.php";
//detalhes anuncio
require"includes-acoes/anuncio-detalhe/anuncio-detalhe.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="UTF-8">
  <meta name="description" content="Anuncie na Liigo - Mais de 30.000 usuários vendo o seu anúncio">
  <meta name="author" content="MãonaWeb">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liigo | <?php echo $linean['titulo']?></title>
   <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <!-- CSS file links -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" media="screen">
  <link href="assets/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet">
  <link href="assets/slick-1.6.0/slick.css" rel="stylesheet">
  <link href="assets/chosen-1.6.2/chosen.min.css" rel="stylesheet">
  <link href="css/nouislider.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/responsive.css" rel="stylesheet" type="text/css" media="all" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
  <![endif]-->

<style type="text/css">
.subheader {
background:#787c8a url(uploads/paginas-internas/<?php echo $lineimgt['image']?>) no-repeat center;
}
</style>

</head>
<body>

<?php require"includes/header/header.php";?>

<section class="subheader">
  <div class="container">
    <h1>Detalhe do Anuncio</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> Detalhes <i class="fa fa-angle-right"></i> <a href="#" class="current"><?php echo $linean['titulo']?></a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module">
  <div class="container">
  
	<div class="row">
		<div class="col-lg-8 col-md-8">

			<div class="row">
					<?php if($enviomsgtxt=="s"){
		          	echo $msgtxt;
		          }
		          	?>
				</div>
		
			<div class="property-single-item property-main">
				<div class="property-header">
					<div class="property-title">
						<h4><?php echo $linean['titulo']?></h4>
            <?php if($linean['preco']!="0"){?><div class="property-price-single right">R$ <?php echo number_format($linean['preco'], 2, ',','.');?></div><?php }?>
						<p class="property-address"><i class="fa fa-map-marker icon"></i><?php echo $linean['estado']?>, <?php echo $linean['cidade']?></p>
            <div class="clear"></div>
					</div>
					<div class="property-single-tags">

						<div class="property-tag button alt featured"><?php echo $linean['categoria']?></div>
						<?php if($linean['marca']!=""){?><div class="property-tag button alt featured"><?php echo $linean['marca']?></div><?php }?>
						<?php if($linean['cabeca_impressao']!=""){?><div class="property-tag button alt featured"><?php echo $linean['cabeca_impressao']?></div><?php }?>
						<?php if($linean['tecnologia']!=""){?><div class="property-tag button alt featured"><?php echo $linean['tecnologia']?></div><?php }?>
						<?php if($linean['condicao']!=""){?><div class="property-tag button alt featured"><?php echo $linean['condicao']?></div><?php }?>
						<?php if($linean['tipo_suprimento']!=""){?><div class="property-tag button alt featured"><?php echo $linean['tipo_suprimento']?></div><?php }?>
						<?php if($linean['tipo_servico']!=""){?><div class="property-tag button alt featured"><?php echo $linean['tipo_servico']?></div><?php }?>
						<?php if($linean['tipo_transporte']!=""){?><div class="property-tag button alt featured"><?php echo $linean['tipo_transporte']?></div><?php }?>
					</div>
				</div>

				
		<?php if($linean['avatar']!=""){?>
        <div class="property-gallery">
          <div class="slider-nav slider-nav-property-gallery">
            <span class="slider-prev"><i class="fa fa-angle-left"></i></span>
            <span class="slider-next"><i class="fa fa-angle-right"></i></span>
          </div>
          <div class="slide-counter"></div>
          <div class="slider slider-property-gallery">
            <div class="slide"><img src="uploads/anuncios/<?php echo $linean['image']?>" alt="imagem" /></div>
            <?php if($linha2!=""){
            	while($line2=$query2->fetch_array()){
            	?>
            <div class="slide"><img src="uploads/anuncios/<?php echo $line2['image']?>" alt="imagem" /></div>
           <?php 
       }
   }
           ?>
          </div>
          <div class="slider property-gallery-pager">
            <a class="property-gallery-thumb"><img src="uploads/anuncios/thumb/<?php echo $linean['avatar']?>" alt="imagem" /></a>
            <?php if($linha2!=""){
            	while($line3=$query3->fetch_array()){
            	?>
            <a class="property-gallery-thumb"><img src="uploads/anuncios/thumb/<?php echo $line3['avatar']?>" alt="imagem" /></a>
           <?php 
       }
   }
           ?>
          </div>
        </div>

			</div><!-- end property title and gallery -->
			<?php }?>

			<div class="widget property-single-item property-description content">
				<h4>
					<span>Descrição</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
					<div class="divider-fade"></div>
				</h4>
				<p><?php echo $linean['descricao']?>
				</p>

			</div><!-- end description -->

			

			

			<div class="widget property-single-item property-agent">
				<h4>
					<span>Informações de contato</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
					<div class="divider-fade"></div>
				</h4>
				<div class="agent">
			        <a href="#" class="agent-img">
			            <div class="img-fade"></div>
			            <?php if($lineuser['avatar']!=""){?>
			            <img src="uploads/usuarios/<?php echo $lineuser['avatar']?>" alt="avatar <?php echo $lineuser['nome']?>" />
			            <?php }else{?>
			            <img src="uploads/usuarios/no.jpg" alt="avatar <?php echo $lineuser['nome']?>" />
			            <?php }?>
			        </a>
			        <div class="agent-content">
			            
			            <div class="agent-details">
			                <h4><a href="#"><?php echo $lineuser['nome']?></a></h4>
			                <p><i class="fa fa-tag icon"></i>Atendimento</p>
			                <p><i class="fa fa-envelope icon"></i><?php echo $lineuser['email']?></p>
			                <p><i class="fa fa-phone icon"></i><?php echo $lineuser['celular']?></p>
			            </div>
			            <ul class="social-icons">
			                <?php if($lineuser['facebook']!=""){?><li><a href="<?php echo $lineuser['facebook']?>" target="_blank"><i class="fa fa-facebook"></i></a></li><?php }?>
			                <?php if($lineuser['twitter']!=""){?><li><a href="<?php echo $lineuser['twitter']?>" target="_blank"><i class="fa fa-twitter"></i></a></li><?php }?>
			                <?php if($lineuser['linkedin']!=""){?><li><a href="<?php echo $lineuser['linkedin']?>" target="_blank"><i class="fa fa-linkedin"></i></a></li><?php }?>
			            </ul>
			        </div>
			        <div class="clear"></div>
			    </div>
			</div><!-- end agent -->

			

		</div><!-- end col -->
		
		<div class="col-lg-4 col-md-4 sidebar sidebar-property-single">
		
			<div class="widget widget-sidebar advanced-search">
			  <h4><span>Faça uma pergunta</span> <img src="images/divider-half-white.png" alt="" /></h4>
			  <div class="widget-content box">
				<form action="" name="formmsgtxt" id="formmsgtxt" method="post">
				  
				  <div class="form-block">
					<label>Escreva aqui sua pergunta</label>
					<textarea class="requiredField" placeholder="" style="border: 1px solid #ccc;" name="mensagemtxt" id="mensagemtxt" required <?php if(!isset($_SESSION['logadaco_site_liigo_265']) AND !isset($_SESSION['passadaco_site_liigo_689']) AND $enviolog==""){?>disabled<?php }?>></textarea>		
					<div class="clear"></div>
				  </div>

				  <div class="form-block">
				  	<?php if(isset($_SESSION['logadaco_site_liigo_265']) AND isset($_SESSION['passadaco_site_liigo_689']) AND $enviolog==""){?>
					<input type="submit" class="button" value="Enviar" />
					<?php }else{?>
					<a href="#" class="button" data-toggle="modal" data-target=".msglog">Enviar</a>

					<div class="modal fade msglog" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Login necessário</h4>
                        </div>
                        <div class="modal-body">
                          <p>Para enviar sua pergunta em relação ao anúncio <b><?php echo $linean['titulo']?></b> é necessário estar logado.</p>
                          <p>Caso já seja cadastrado, <a href="login?ref=<?php echo $area?>">clique aqui</a> para efetuar o login.</p>
                          <p>Caso não tenha um cadastro, cadastre-se <a href="cadastre-se?ref=<?php echo $area?>">clicando aqui</a>.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>

                      </div>
                    </div>
                  </div>
					<?php }?>
					<input name="enviomsgtxt" type="hidden" id="enviomsgtxt" value="s" />
				  </div>
				</form>
			  </div><!-- end widget content -->
			</div><!-- end widget -->
			
		
		</div><!-- end sidebar -->
		
	</div><!-- end row -->

  </div><!-- end container -->
</section>

<?php require"includes/rodape/rodape.php";?>

<!-- JavaScript file links -->
<script src="js/jquery-3.1.1.min.js"></script>      <!-- Jquery -->
<script src="assets/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>  <!-- bootstrap 3.0 -->
<script src="assets/slick-1.6.0/slick.min.js"></script> <!-- slick slider -->
<script src="assets/chosen-1.6.2/chosen.jquery.min.js"></script> <!-- chosen - for select dropdowns -->
<script src="js/isotope.min.js"></script> <!-- isotope-->
<script src="js/wNumb.js"></script> <!-- price formatting -->
<script src="js/nouislider.min.js"></script> <!-- price slider -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&sensor=false"></script>
<script src="js/map-single.js"></script> <!-- google maps -->
<script src="js/global.js"></script>
<script src="js/pbox.js"></script>
</body>
</html>