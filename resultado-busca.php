<?php
session_start();
//conn
require"conn/exe.php";
//regras
require"includes-acoes/regras/regras.php";
//busca
require"includes-acoes/busca/busca.php";
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
 
<<<<<<< HEAD
<!-- Start GPT Async Tag -->
<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var gptadslots = [];
  var googletag = googletag || {cmd:[]};
</script>
<script>
  googletag.cmd.push(function() {
    //Adslot 1 declaration
    gptadslots.push(googletag.defineSlot('/21722728057/Internas', [[300,250]], 'div-gpt-ad-4064511-1')
                             .addService(googletag.pubads()));
    //Adslot 2 declaration
    gptadslots.push(googletag.defineSlot('/21722728057/Internas', [[300,600]], 'div-gpt-ad-4064511-2')
                             .addService(googletag.pubads()));
    //Adslot 3 declaration
    gptadslots.push(googletag.defineSlot('/21722728057/Internas', [[970,250]], 'div-gpt-ad-4064511-3')
                             .addService(googletag.pubads()));

    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- End GPT Async Tag -->
=======
 <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21722728057/Internas', [[300, 250], [970, 90], [970, 250], [728, 90], [320, 100], [320, 50], [300, 600]], 'div-gpt-ad-1532020435994-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.pubads().setTargeting('posicao', []);
    googletag.enableServices();
  });
</script>
>>>>>>> 012ced6bff67702979ebdf688fa37c5bb13a2653

 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="UTF-8">
  <meta name="description" content="Anuncie na Liigo - Mais de 30.000 usuários vendo o seu anúncio">
  <meta name="author" content="MãonaWeb">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liigo | Resultado da busca</title>
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

<section class="subheader subheader-listing-sidebar">
  <div class="container">
    <h1>Resultado da Busca</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Resultado da Busca</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module">
  <div class="container">
  
	<div class="row">
		<div class="col-lg-8 col-md-8">

			<div class="row">
					<?php if($action=="fav"){
		          	echo $msgfav;
		          }
		          	?>
				</div>
		
			<div class="property-listing-header">
				<span class="property-count left"><?php echo $numTotal?> anúncio(s) encontrado(s)</span>
				<?php if($numCont!=""){?><form class="right">
					<select name="acao" onchange="MM_jumpMenu('parent',this,0)">
						<option value="">Selecione...</option>
						<option value="?buscaprinc=<?php echo $buscaprinc?>&acao=date_desc" <?php if($acao=="date_desc"){?>selected<?php }?>>Novo para o mais antigo</option>
						<option value="?buscaprinc=<?php echo $buscaprinc?>&acao=date_asc" <?php if($acao=="date_asc"){?>selected<?php }?>>Antigo para o mais novo</option>
						<option value="?buscaprinc=<?php echo $buscaprinc?>&acao=price_desc" <?php if($acao=="price_desc"){?>selected<?php }?>>Preço maior para o menor</option>
						<option value="?buscaprinc=<?php echo $buscaprinc?>&acao=price_asc" <?php if($acao=="price_asc"){?>selected<?php }?>>Preço menor para o maior</option>
					</select>
				</form><?php }?>

				

				<!--<div class="property-layout-toggle right">
					<a href="property-listing-grid-sidebar.html" class="property-layout-toggle-item"><i class="fa fa-th-large"></i></a>
					<a href="property-listing-row-sidebar.html" class="property-layout-toggle-item active"><i class="fa fa-bars"></i></a>
				</div>-->

			<div class="clear"></div>
			</div><!-- end property listing header -->
			
			<?php
			if($numCont!=""){
            while($ddadosped=$querycup->fetch_array()){
            ?>
			<div class="property property-row property-row-sidebar shadow-hover">
		      <a href="anuncio-detalhe?area=<?php echo $ddadosped['id_cod']?>" class="property-img">
		        <div class="img-fade"></div>
		        <?php if($ddadosped['preco']!="0"){?><div class="property-price">R$ <?php echo number_format($ddadosped['preco'], 2, ',','.');?></div><?php }?>
		        <div class="property-color-bar"></div>
		        <?php if($ddadosped['image']!=""){?>
		        <img src="uploads/anuncios/<?php echo $ddadosped['image']?>" alt="anuncio" />
		        <?php }else{?>
		        <img src="uploads/anuncios/no.jpg" alt="anuncio" />
		        <?php }?>
		      </a>
		      <div class="property-content">
		        <div class="property-title">
		          <h4><a href="anuncio-detalhe?area=<?php echo $ddadosped['id_cod']?>"><?php echo $ddadosped['titulo']?></a></h4>
		          <p class="property-address"><i class="fa fa-map-marker icon"></i><?php echo $ddadosped['estado']?>, <?php echo $ddadosped['cidade']?></p>
		          <div class="clear"></div>
		          <p class="property-text"><?php echo mb_strimwidth($ddadosped['descricao'], 0, 100, "...")?></p>
		        </div>
		        
		      </div>
		      <div class="property-footer">
		        <span class="left"><i class="fa fa-calendar-o icon"></i> <?php echo utf8_encode(tempo_corrido($ddadosped['data']));?></span>
		        <span class="right">

		        <?php if(isset($_SESSION['logadaco_site_liigo_265']) AND isset($_SESSION['passadaco_site_liigo_689'])){?>
		          <a href="#" data-toggle="modal" data-target=".fav<?php echo $ddadosped['id_cod']?>"><i class="fa fa-heart-o icon"></i></a>

		          <div class="modal fade fav<?php echo $ddadosped['id_cod']?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Adicionar aos Favoritos</h4>
                        </div>
                        <div class="modal-body">
                          <p>Deseja realmente adicionar esse anúncio <b><?php echo $ddadosped['titulo']?></b> a sua lista de Favoritos?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          <a href="?buscaprinc=<?php echo $buscaprinc?>&area=<?php echo $ddadosped['id_cod']?>&action=fav" class="btn btn-success" style="color:#FFF">Adicionar</a>
                        </div>

                      </div>
                    </div>
                  </div>


		          <?php }?>
		          <!--<a href="#"><i class="fa fa-share-alt"></i></a>-->
		          <a href="anuncio-detalhe?area=<?php echo $ddadosped['id_cod']?>" class="button button-icon"><i class="fa fa-angle-right"></i>Detalhes</a>
		        </span>
		        <div class="clear"></div>
		      </div>
		      <div class="clear"></div>
		  </div>
		  <?php }?>

		  <?php
		}else{
		  ?>
		<h4>Nenhum resultado encontrado pelo termo "<?php echo $buscaprinc?>"</h4>
		<?php
		}
		  ?>
		  
<div class="pagination">
<div class="center">
<?php
if($numCont > 0){
if($numTotal>$num_registro){
$totalPag = Ceil($numTotal / $num_registro);
$proximo=$pag+1;
$anterior=$pag-1;
?>
<ul>
<?php if($anterior>=0){?><li><a href="?buscaprinc=<?php echo $buscaprinc?>&acao=<?php echo $acao?>&pagina=<?php echo $anterior?>" class="button small grey"><i class="fa fa-angle-left"></i></a></li><?php }?>
<?php
for($i=1; $i <= $totalPag; $i++){
$indice ="pagina=".$i."";
?>

<li <?php if($i==$pag){?> class="current" <?php }?>><a href="?buscaprinc=<?php echo $buscaprinc?>&acao=<?php echo $acao?>&<?php echo $indice?>" class="button small grey"><?php echo $i?></a></li>
<?php
}
?>  

<?php if($totalPag>=$proximo){?><li><a href="?buscaprinc=<?php echo $buscaprinc?>&acao=<?php echo $acao?>&pagina=<?php echo $proximo?>" class="button small grey"><i class="fa fa-angle-right"></i></a></li><?php }?>

</ul>
<?php
} 
} 
?>
				</div>
				<div class="clear"></div>
			</div>
		
		</div><!-- end listing -->
		
		<div class="col-lg-4 col-md-4 sidebar">
		
			<div class="widget widget-sidebar sidebar-properties advanced-search">
			  <h4><span>Termo buscado</span> <img src="images/divider-half-white.png" alt="" /></h4>
			  <div class="widget-content box">
				<form>
				  <div class="form-block border">
					<label for="property-location">Categorias</label>	
					<?php
					while($linecat2=$querycup2->fetch_array()){
					//categorias
					$listacat="SELECT id_cod,nome,status from tbl_categoria WHERE nome like'%".$linecat2['categoria']."%' ORDER BY nome ASC";
					$querycat=$mysqli->query($listacat);
					$numcat=$querycat->num_rows;	
					while($linecat=$querycat->fetch_array()){
					//anuncios
					$sqlcupnum="SELECT * FROM tbl_anuncio WHERE (titulo like'%".$buscaprinc."%' OR marca like'%".$buscaprinc."%' OR cabeca_impressao like'%".$buscaprinc."%' OR tecnologia like'%".$buscaprinc."%' OR condicao like'%".$buscaprinc."%' OR descricao like'%".$buscaprinc."%') AND status='1' AND categoria='".$linecat['nome']."'";
					$querycupnum=$mysqli->query($sqlcupnum);
					$numContnum=$querycupnum->num_rows;
					?>
					<p><a href="lista-<?php echo str_replace(" ", "-",loCase(ascento(utf8_decode($linecat['nome']))))?>"><?php echo $linecat['nome']?> (<?php echo $numContnum?>)</a></p>
					<?php
				}
					}
					?>

				</form>
			  </div><!-- end widget content -->
			  
			  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<script>

                  (adsbygoogle = window.adsbygoogle || []).push({

                    google_ad_client: "ca-pub-1284684456180483",

                    enable_page_level_ads: true

                  });

                </script>
                
                
			</div><!-- end widget -->
			
		
		</div><!-- end sidebar -->
<<<<<<< HEAD
		<!-- Async AdSlot 2 for Ad unit 'Internas' ### Size: [[300,600]] -->
        <!-- Adslot's refresh function: googletag.pubads().refresh([gptadslots[1]]) -->
        <div id='div-gpt-ad-4064511-2'>
        <script>
        googletag.cmd.push(function() { googletag.display('div-gpt-ad-4064511-2'); });
        </script>
        </div>
        <!-- End AdSlot 2 -->
=======
		<!-- /21722728057/Internas -->
        <div id='div-gpt-ad-1532020522164-0' style='height:250px; width:300px;'>
        <script>
        googletag.cmd.push(function() { googletag.display('div-gpt-ad-1532020522164-0'); });
        </script>
        </div>
>>>>>>> 012ced6bff67702979ebdf688fa37c5bb13a2653
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
<script src="js/global.js"></script>
<script src="js/pbox.js"></script>

</body>
</html>