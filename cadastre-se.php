<?php
session_start();
//conn
require"conn/exe.php";
//regras
require"includes-acoes/regras/regras.php";
//cadastre-se
require"includes-acoes/cadastro/cadastro.php";
//condicao
if(isset($_SESSION['logadaco_site_liigo_265']) AND isset($_SESSION['passadaco_site_liigo_689'])){
header("Location:meu-perfil");
}
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
  <title>Liigo | Cadastre-se</title>
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
    <h1>Cadastre-se</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Cadastre-se</a></div>
    <div class="clear"></div>
  </div>
</section>
<a id="cad"></a>
<section class="module login">
  <div class="container">
 
    <div class="row">
      <div class="col-lg-4 col-lg-offset-4"> 
        <p>Você já possui uma conta?<strong><a href="login"> Faça o Login aqui.</a></strong></p> 
        <form method="post" class="login-form" id="cadastro" name="cadastro" action="#cad">
         

          <?php if($enviocad=="s"){
                            echo $msgscad;
                          }
                            ?>

          <div class="form-block">
            <label>Nome*</label>
            <input class="border" type="text" name="nome" required value="<?php echo $_SESSION['nome'];?>" />
          </div>
          <div class="form-block">
            <label>Email*</label>
            <input class="border" type="email" name="email" required value="<?php echo $_SESSION['email'];?>"/>
          </div>
          <div>
           <label>Telefone</label>
            <input class="border" type="tel" name="telefone" value="<?php echo $_SESSION['telefone'];?>"/>
          </div>
          <div>
           <label>Celular*</label>
            <input class="border" type="tel" name="celular" required value="<?php echo $_SESSION['celular'];?>"/>
          </div>
          <div>
          <label>CPF/ CNPJ*</label>
            <input class="border" type="text" name="cpf_cnpj" required value="<?php echo $_SESSION['cpf_cnpj'];?>"/>
          </div>
        <div class="form-block border">
                  <label>Estado*</label>
                  <select class="border" style="display: none;" name="estado" id="estado">   
                  <option value="">Selecione o Estado</option>
                  <?php while($lineestad=$queryestad->fetch_array()){?>
   <option value="<?php echo $lineestad['Uf']?>" <?php if($_SESSION['estado']==$lineestad['Uf']){?>selected<?php }?>><?php echo $lineestad['Uf']?></option>
                  <?php }?>
                  </select>
            </div>
            <div class="form-block border">
                  <label>Cidade*</label>
                  <select class="border" style="display: none;" name="cidade" id="cidade">   
                  <option value="">Selecione uma Cidade</option>
                  </select>               
                  </select>
            </div>
            
          <div class="form-block">
            <label>Senha*</label>
            <input class="border" type="password" name="pass" required/>
          </div>
          <div class="form-block">
            
            <label>Confirme a senha*</label>
            <input class="border" type="password" name="pass_confirm" required/>
          </div>
          <div class="form-block">
            <button class="button button-icon" type="submit"><i class="fa fa-angle-right"></i>Registrar</button>
            <input name="enviocad" type="hidden" id="enviocad" value="s" />
          </div>
          <div class="divider"></div>
          <p class="note">Clicando em registrarvocê aceita nossos <br><a href="#">Termos and condições</a></p>    
        </form>
      </div>
    </div><!-- end row -->

  </div>
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