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
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116137356-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116137356-1');
</script>
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


<!-- Start GPT Async Tag -->
<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var gptadslots = [];
  var googletag = googletag || {cmd:[]};
</script>
<script>
  googletag.cmd.push(function() {
    //Adslot 1 declaration
    gptadslots.push(googletag.defineSlot('/21722728057/Detalhe_Anuncios', [[300,250]], 'div-gpt-ad-1400168-1')
                             .addService(googletag.pubads()));

    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- End GPT Async Tag -->




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

						<?php if($linean['subcategoria']!=""){$mc=explode(",", $linean['subcategoria']);foreach($mc as $separado){?><div class="property-tag button alt featured"><?php echo $separado?> </div> <?php }}?>

						<?php if($linean['marca']!=""){$mc2=explode(",", $linean['marca']);foreach($mc2 as $separado2){?><div class="property-tag button alt featured"><?php echo $separado2?></div> <?php }}?>

						<?php if($linean['cabeca_impressao']!=""){?><div class="property-tag button alt featured"><?php echo $linean['cabeca_impressao']?></div><?php }?>

						<?php if($linean['tecnologia']!=""){$mc3=explode(",", $linean['tecnologia']);foreach($mc3 as $separado3){?><div class="property-tag button alt featured"><?php echo $separado3?></div><?php }}?>

						<?php if($linean['condicao']!=""){?><div class="property-tag button alt featured"><?php echo $linean['condicao']?></div><?php }?>

					
					</div>
				</div>

				
		
        <div class="property-gallery">
          <div class="slider-nav slider-nav-property-gallery">
            <span class="slider-prev"><i class="fa fa-angle-left"></i></span>
            <span class="slider-next"><i class="fa fa-angle-right"></i></span>
          </div>
          <div class="slide-counter"></div>
          <div class="slider slider-property-gallery">
          	<?php if($linean['avatar']!=""){?>
            <div class="slide"><img src="uploads/anuncios/<?php echo $linean['image']?>" alt="imagem" /></div>
            <?php }else{?>
            <div class="slide"><img src="uploads/anuncios/no.jpg" alt="imagem" /></div>
            <?php }?>
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
          	<?php if($linean['avatar']!=""){?>
            <a class="property-gallery-thumb"><img src="uploads/anuncios/thumb/<?php echo $linean['avatar']?>" alt="imagem" /></a>
            <?php }else{?>
            <a class="property-gallery-thumb"><img src="uploads/anuncios/thumb/no.jpg" alt="imagem" /></a>
            <?php }?>
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
		
			<?php if(isset($_SESSION['logadaco_site_liigo_265']) AND isset($_SESSION['passadaco_site_liigo_689']) AND $enviolog==""){?>
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
					<input type="submit" class="button" value="Enviar" />
					<input name="enviomsgtxt" type="hidden" id="enviomsgtxt" value="s" />
				  </div>
				</form>
			  </div><!-- end widget content -->
			</div><!-- end widget -->
			<?php }else{?>
			<div class="widget widget-sidebar advanced-search">
				<h4><span>Faça uma pergunta</span> <img src="images/divider-half-white.png" alt="" /></h4>
			 <div class="widget-content box">
			 	<div class="row">
			 	<div class="col-lg-10 col-lg-offset-1"><a href="#" class="button button-icon alt large" data-toggle="modal" data-target=".msglog"><i class="fa fa-wechat"></i>Enviar sua pergunta</a></div>

			 	<div class="modal fade msglog" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Login necessário</h4>
                        </div>
                        <div class="modal-body">
                        	
                          <p>Para enviar sua pergunta em relação ao anúncio <b><?php echo $linean['titulo']?></b> é necessário estar logado.</p>
                          <div class="row">
			 				<div class="col-lg-10 col-lg-offset-2">
                          <p><a href="login?ref=<?php echo $area?>" class="button large">Fazer login</a></p>
                          <p><a href="cadastre-se?ref=<?php echo $area?>" class="button large">Criar conta</a></p>
		                      </div>
		                  </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                      </div>
                    </div>
                  </div>

			 	</div>
			 	
			 </div>	
			</div>
			<?php }?>
		
		</div><!-- end sidebar -->
		<style>
div.banner-dfp {
        text-align: center; }
    </style>
		<!-- Async AdSlot 1 for Ad unit 'Detalhe_Anuncios' ### Size: [[300,250]] -->
<!-- Adslot's refresh function: googletag.pubads().refresh([gptadslots[0]]) -->
<div id='div-gpt-ad-1400168-1' class="banner-dfp">
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1400168-1'); });
  </script>
</div>
<!-- End AdSlot 1 -->


		
		
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