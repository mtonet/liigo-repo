<?php
//conn
require"conn/exe.php";
//regras
require"includes-acoes/regras/regras.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Homely - Responsive Real Estate Template">
  <meta name="author" content="Rype Creative [Chris Gipple]">
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

<section class="module login">
  <div class="container">

    <div class="row">
      <div class="col-lg-4 col-lg-offset-4"> 
        <p>Você já possui uma conta?<strong><a href="login"> Faça o Login aqui.</a></strong></p> 
        <form method="post" class="login-form">
          <div class="form-block">
            <label>Nome*</label>
            <input class="border" type="text" name="name" />
          </div>
          <div class="form-block">
            <label>Email*</label>
            <input class="border" type="text" name="email" />
          </div>
          <div>
           <label>Telefone</label>
            <input class="border" type="text" name="telefone" />
          </div>
          <div>
           <label>Celular*</label>
            <input class="border" type="text" name="celular" />
          </div>
          <div>
          <label>CPF/ CNPJ</label>
            <input class="border" type="text" name="CPF/ CNPJ" />
          </div>
        <div class="form-block border">
                  <label>Estado*</label>
                  <select name="property-type" class="border" style="display: none;">
                    <option></option>
                    <option value="family-house">São Paulo</option>
                    <option value="apartment">Rio de Janeiro</option>
                    <option value="condo">Paraná</option>                    
                  </select>
            </div>
            <div class="form-block border">
                  <label>Cidade*</label>
                  <select name="property-type" class="border" style="display: none;">
                    <option></option>
                    <option value="family-house">Campinas</option>
                    <option value="apartment">Curitiba</option>
                    <option value="condo">Recife</option>                    
                  </select>
            </div>
          <div class="form-block">
            <label>Senha</label>
            <input class="border" type="password" name="pass" />
          </div>
          <div class="form-block">
            <label>Confirme a senha</label>
            <input class="border" type="password" name="pass-confirm" />
          </div>
          <div class="form-block">
            <button class="button button-icon" type="submit"><i class="fa fa-angle-right"></i>Registrar</button>
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


</body>
</html>