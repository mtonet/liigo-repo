<?php
session_start();
//conn
require"conn/exe.php";
//regras
require"includes-acoes/regras/regras.php";
//session
require"includes-acoes/session/session.php";
//favoritos
require"includes-acoes/favoritos/favoritos.php";
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
  <title>Liigo | Favoritos</title>
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
    <h1>Favoritos</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Favoritos</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module favorited-properties">
  <div class="container">
  
	<div class="row">
		<div class="col-lg-3 col-md-3 sidebar-left">
			<div class="widget member-card">
				<div class="member-card-header">
					<a href="#" class="member-card-avatar">
					<?php if($linedpu['avatar']==""){?>
						<img src="uploads/usuarios/no.jpg" alt="<?php echo $linedpu['avatar'];?>" />
						<?php }else{?>
						<img src="uploads/usuarios/<?php echo $linedpu['avatar'];?>" alt="<?php echo $linedpu['avatar'];?>" />
						<?php }?>
					</a>
					<h3><?php echo $linedpu['nome']?></h3>
					<p><i class="fa fa-envelope icon"></i><?php echo $linedpu['email']?></p>
				</div>
				<div class="member-card-content">
					<img class="hex" src="images/hexagon.png" alt="" />
					<ul>
						<li><a href="meu-perfil"><i class="fa fa-user icon"></i>Perfil</a></li>
						<li><a href="meus-anuncios"><i class="fa fa-home icon"></i>Meus anúncios</a></li>
						<li class="active"><a href="favoritos"><i class="fa fa-heart icon"></i>Favoritos</a></li>
						<li><a href="anuncie"><i class="fa fa-plus icon"></i>Anuncie</a></li>
						<li><a href="chat"><i class="fa fa-plus icon"></i>Chat</a></li>
						<li><a href="logout"><i class="fa fa-reply icon"></i>Logout</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-lg-9 col-md-9">
			<?php if($numfav!=""){?>
			<table class="my-properties-list favorite-properties-list">
			  <tr>
				<th>Imagem</th>
				<th>Título</th>
				<th>Ações</th>
			  </tr>
			  <?php
			  while($linefav=$queryfav->fetch_array()){
			  	//dados anuncio
			  	$listaanunc="SELECT id_cod,id_user,titulo,preco,avatar,data,status,categoria FROM tbl_anuncio WHERE id_cod='".$linefav['id_anuncio']."' ORDER BY data desc";
				$queryanunc=$mysqli->query($listaanunc);
				$lineanunc=$queryanunc->fetch_array();
			  ?>
			  <tr>
				<td class="property-img">
					<?php if($lineanunc['avatar']==""){?>	
					<img src="uploads/anuncios/thumb/no.jpg" alt="avatar anuncio" />
					<?php }else{?>
					<img src="uploads/anuncios/thumb/<?php echo $lineanunc['avatar'];?>" alt="avatar anuncio" />
					<?php }?>
					</a></td>
				<td class="property-title">
					<?php echo $lineanunc['titulo'];?><br/>
					<?php if($lineanunc['preco']!="0"){?><p><strong>R$ <?php echo number_format($lineanunc['preco'], 2, ',','.');?></strong></p><?php }?>
				</td>
				<td class="property-actions">
					<a href="anuncio-detalhe?area=<?php echo $lineanunc['id_cod']?>" target="_blank"><i class="fa fa-eye icon"></i>Ver</a>
					<a href="#" data-toggle="modal" data-target=".deletar<?php echo $lineanunc['id_cod']?>"><i class="fa fa-close icon"></i>Excluir</a>
				</td>
			  </tr>


			  <div class="modal fade deletar<?php echo $lineanunc['id_cod']?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Excluir registro</h4>
                        </div>
                        <div class="modal-body">
                          <p>Deseja realmente excluir o anúncio <b><?php echo $lineanunc['titulo']?></b> dos Favoritos?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          <a href="?area=<?php echo $linefav['id_cod']?>&action=delete" class="btn btn-danger">Excluir</a>
                        </div>

                      </div>
                    </div>
                  </div>


			  <?php
			  }
			  ?>
			</table>
			
			<!--<div class="pagination">
				<div class="center">
					<ul>
					  <li><a href="#" class="button small grey"><i class="fa fa-angle-left"></i></a></li>
					  <li class="current"><a href="#" class="button small grey">1</a></li>
					  <li><a href="#" class="button small grey">2</a></li>
					  <li><a href="#" class="button small grey">3</a></li>
					  <li><a href="#" class="button small grey"><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>-->


<?php }else{?>

<table class="my-properties-list">
			  <tr>
				<th>Nenhum anúncio criado até o momento.</th>
			  </tr>
			</table>

<?php }?>


		</div><!-- end col -->
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
<script src="assets/html5lightbox/html5lightbox.js"></script> <!-- lightbox -->
<script src="js/global.js"></script>
<script src="js/pbox.js"></script>
</body>
</html>