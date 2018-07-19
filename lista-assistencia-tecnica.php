<?php
session_start();
//conn
require"conn/exe.php";
//regras
require"includes-acoes/regras/regras.php";
//lista
require"includes-acoes/listas/assistencia.php";
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

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="UTF-8">
  <meta name="description" content="Anuncie na Liigo - Mais de 30.000 usuários vendo o seu anúncio">
  <meta name="author" content="MãonaWeb">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liigo | Assistência</title>
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
    <h1>Lista de Anúncios</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Assistência Técnica</a></div>
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
				<span class="property-count left"><?php echo $numCont?> anúncio(s) encontrado(s)</span>
				<form class="right">
					<select name="sort_by" onchange="MM_jumpMenu('parent',this,0)">
						<option value="">Selecione...</option>
						<option value="?marca=<?php echo $marca?>&tecnologia=<?php echo $tecnologia?>&acao=date_desc" <?php if($acao=="date_desc"){?>selected<?php }?>>Novo para o mais antigo</option>
						<option value="?marca=<?php echo $marca?>&tecnologia=<?php echo $tecnologia?>&acao=date_asc" <?php if($acao=="date_asc"){?>selected<?php }?>>Antigo para o mais novo</option>
						<option value="?marca=<?php echo $marca?>&tecnologia=<?php echo $tecnologia?>&acao=price_desc" <?php if($acao=="price_desc"){?>selected<?php }?>>Preço maior para o menor</option>
						<option value="?marca=<?php echo $marca?>&tecnologia=<?php echo $tecnologia?>&acao=price_asc" <?php if($acao=="price_asc"){?>selected<?php }?>>Preço menor para o maior</option>
					</select>
				</form>
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
                          <a href="?area=<?php echo $ddadosped['id_cod']?>&action=fav" class="btn btn-success" style="color:#FFF">Adicionar</a>
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
		<h4>Nenhum anúncio de Assistência Técnica disponível</h4>
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
<?php if($totalPag<=$anterior){?><li><a href="?buscaprinc=<?php echo $buscaprinc?>&acao=<?php echo $acao?>&pagina=<?php echo $anterior?>" class="button small grey"><i class="fa fa-angle-left"></i></a></li><?php }?>
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
			  <h4><span>Filtre sua busca</span> <img src="images/divider-half-white.png" alt="" /></h4>
			  <div class="widget-content box">
				<form id="formfiltro" name="formfiltro" method="get" action="">
				

				  <div class="form-block border">
					<label for="property-status">Tipo de equipamento</label>
					<select id="tecnologia" name="tecnologia" class="border">
					 <option value="">Todos</option>
<?php while($linetec=$querytec->fetch_array()){?>
                    <option value="<?php echo $linetec['nome']?>" <?php if($tecnologia==$linetec['nome']){?>selected<?php }?>><?php echo $linetec['nome']?></option>
                    <?php }?>
					</select>
				  </div>

				  <div class="form-block border">
					<label for="property-type">Marcas</label>
					<select id="marca" name="marca" class="border">
					  <option value="">Todas</option>
                <?php while($linemarc=$querymarc->fetch_array()){?>
                    <option value="<?php echo $linemarc['nome']?>" <?php if($marca==$linemarc['nome']){?>selected<?php }?>><?php echo $linemarc['nome']?></option>
                    <?php }?>  
					</select>
				  </div>
				  
              		<!--<div class="form-block">
            <label>Preço</label>
            <div class="price-slider" id="price-slider"></div>
          </div>-->
              
				  <div class="form-block">
					<input type="submit" id="button" value="Filtrar" class="button" onclick="javascript:formfiltro.submit()"/>
				  </div>
				</form>
			  </div><!-- end widget content -->
			</div><!-- end widget -->
			
		
		</div><!-- end sidebar -->
		<!-- /21722728057/Internas -->
<div id='div-gpt-ad-1532020522164-0' style='height:250px; width:300px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1532020522164-0'); });
</script>
</div>

		
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