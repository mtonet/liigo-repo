<?php
session_start();
//conn
require"conn/exe.php";
//regras
require"includes-acoes/regras/regras.php";
//session
require"includes-acoes/session/session.php";
//perfil
require"includes-acoes/usuario/perfil.php";
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
  <title>Liigo | Perfil</title>
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
    <h1>Meu perfil</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">perfil</a></div>
    <div class="clear"></div>
  </div>
</section>

<a id="perf"></a>
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
						<li class="active"><a href="meu-perfil"><i class="fa fa-user icon"></i>Perfil</a></li>
						<li><a href="meus-anuncios"><i class="fa fa-home icon"></i>Meus anúncios</a></li>
						<li ><a href="favoritos"><i class="fa fa-heart icon"></i>Favoritos</a></li>
						<li><a href="anuncie"><i class="fa fa-plus icon"></i>Anuncie</a></li>
						<li><a href="chat"><i class="fa fa-plus icon"></i>Chat</a></li>
						<li><a href="logout"><i class="fa fa-reply icon"></i>Logout</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-lg-9 col-md-9">

			<form id="perfil" name="perfil" action="#perf" method="post" enctype="multipart/form-data">

				<?php if($envioperfil=="s"){
                            echo $msgsperf;
                          }
                            ?>

				<div class="row">
					<div class="col-lg-3">

						<div class="edit-avatar">
							<?php if($linedpu['avatar']==""){?>
						<img src="uploads/usuarios/no.jpg" alt="<?php echo $linedpu['avatar'];?>" class="profile-avatar"/>
						<?php }else{?>
						<img src="uploads/usuarios/<?php echo $linedpu['avatar'];?>" alt="<?php echo $linedpu['avatar'];?>" class="profile-avatar"/>
						<?php }?>

						<input type="file" name="imagem"  accept=".jpg, .jpeg, .png" style="width: 100%;">

						</div>

					</div>

					<div class="col-lg-9">
						
						<div class="form-block">
							<label>Nome</label>
							<input class="border" type="text" name="nome" value="<?php echo $linedpu['nome']?>" />
						</div>
						<div class="form-block">
							<label>E-mail</label>
							<input class="border" type="email" name="email" value="<?php echo $linedpu['email']?>" />
						</div>
						<div class="form-block">
							<label>Telefone</label>
							<input class="border" type="phone" name="telefone" value="<?php echo $linedpu['telefone']?>" />
						</div>

					</div>

						
				</div><!-- end row -->

<div class="row">
					<div class="col-lg-6">

					<div class="form-block">
							<label>Celular</label>
							<input class="border" type="phone" name="celular" value="<?php echo $linedpu['celular']?>" />
						</div>

					<div class="form-block">
							<label>Estado</label>
							<select class="border" style="display: none;" name="estado" id="estado">   
                  <option value="">Selecione o Estado</option>
   	<option value="AC" <?php if($linedpu['estado']=="AC"){?>selected<?php }?>>Acre</option>
    <option value="AL" <?php if($linedpu['estado']=="AL"){?>selected<?php }?>>Alagoas</option>
    <option value="AP" <?php if($linedpu['estado']=="AP"){?>selected<?php }?>>Amapá</option>
    <option value="AM" <?php if($linedpu['estado']=="AM"){?>selected<?php }?>>Amazonas</option>
    <option value="BA" <?php if($linedpu['estado']=="BA"){?>selected<?php }?>>Bahia</option>
    <option value="CE" <?php if($linedpu['estado']=="CE"){?>selected<?php }?>>Ceará</option>
    <option value="DF" <?php if($linedpu['estado']=="DF"){?>selected<?php }?>>Distrito Federal</option>
    <option value="ES" <?php if($linedpu['estado']=="ES"){?>selected<?php }?>>Espírito Santo</option>
    <option value="GO" <?php if($linedpu['estado']=="GO"){?>selected<?php }?>>Goiás</option>
    <option value="MA" <?php if($linedpu['estado']=="MA"){?>selected<?php }?>>Maranhão</option>
    <option value="MT" <?php if($linedpu['estado']=="MT"){?>selected<?php }?>>Mato Grosso</option>
    <option value="MS" <?php if($linedpu['estado']=="MS"){?>selected<?php }?>>Mato Grosso do Sul</option>
    <option value="MG" <?php if($linedpu['estado']=="MG"){?>selected<?php }?>>Minas Gerais</option>
    <option value="PA" <?php if($linedpu['estado']=="PA"){?>selected<?php }?>>Pará</option>
    <option value="PB" <?php if($linedpu['estado']=="PB"){?>selected<?php }?>>Paraíba</option>
    <option value="PR" <?php if($linedpu['estado']=="PR"){?>selected<?php }?>>Paraná</option>
    <option value="PE" <?php if($linedpu['estado']=="PE"){?>selected<?php }?>>Pernambuco</option>
    <option value="PI" <?php if($linedpu['estado']=="PI"){?>selected<?php }?>>Piauí</option>
    <option value="RJ" <?php if($linedpu['estado']=="RJ"){?>selected<?php }?>>Rio de Janeiro</option>
    <option value="RN" <?php if($linedpu['estado']=="RN"){?>selected<?php }?>>Rio Grande do Norte</option>
    <option value="RS" <?php if($linedpu['estado']=="RS"){?>selected<?php }?>>Rio Grande do Sul</option>
    <option value="RO" <?php if($linedpu['estado']=="RO"){?>selected<?php }?>>Rondônia</option>
    <option value="RR" <?php if($linedpu['estado']=="RR"){?>selected<?php }?>>Rorâima</option>
    <option value="SC" <?php if($linedpu['estado']=="SC"){?>selected<?php }?>>Santa Catarina</option>
    <option value="SP" <?php if($linedpu['estado']=="SP"){?>selected<?php }?>>São Paulo</option>
    <option value="SE" <?php if($linedpu['estado']=="SE"){?>selected<?php }?>>Sergipe</option>
    <option value="TO" <?php if($linedpu['estado']=="TO"){?>selected<?php }?>>Tocantins</option>            
                  </select>
						</div>	

					</div>

					<div class="col-lg-6">

					<div class="form-block">
							<label>CPF/CNPJ</label>
							<input class="border" type="text" name="cpf_cnpj" value="<?php echo $linedpu['cpf_cnpj']?>" />
						</div>

						<div class="form-block">
							<label>Cidade</label>
							<input class="border" type="text" name="cidade" style="text-transform: capitalize;" value="<?php echo $linedpu['cidade']?>"/>
						</div>


					</div>
</div>

				
				<div class="form-block">
					<label>Descrição</label>
					<textarea class="border" name="descricao"><?php echo $linedpu['descricao']?></textarea>
				</div>	
				
				<div class="row">
					<div class="col-lg-6">
						<h4>Redes sociais</h4>
						<div class="divider"></div>
						<div class="form-block">
							<label>Facebook</label>
							<input class="border" type="text" name="facebook" value="<?php echo $linedpu['facebook']?>" />
						</div>
						
						<div class="form-block">
							<label>Twitter</label>
							<input class="border" type="text" name="twitter" value="<?php echo $linedpu['twitter']?>" />
						</div>
						
						<div class="form-block">
							<label>Linkedin</label>
							<input class="border" type="text" name="linkedin" value="<?php echo $linedpu['linkedin']?>" />
						</div>
					</div>
					<div class="col-lg-6">
						<h4>Alterar senha</h4>
						<div class="divider"></div>
						
						<div class="form-block">
							<label>Nova senha</label>
							<input class="border" type="password" name="new_pass" />
						</div>
						
						<div class="form-block">
							<label>Confirme sua nova senha</label>
							<input class="border" type="password" name="new_pass_confirm" />
						</div>
					</div>
				</div><!-- end row -->
				
				<div class="form-block">
					<button type="submit" class="button button-icon"><i class="fa fa-check"></i>Alterar</button>
					<input name="envioperfil" type="hidden" id="envioperfil" value="s" />
				</div>
				
			</form>
		
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