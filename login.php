<?php
session_start();
//conn
require"conn/exe.php";
//regras
require"includes-acoes/regras/regras.php";
//login
require"includes-acoes/login/login.php";
//condicao
if(isset($_SESSION['logadaco_site_liigo_265']) AND isset($_SESSION['passadaco_site_liigo_689']) AND $enviolog==""){
header("Location:meu-perfil");
}
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
  <title>Liigo | Login</title>
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
    <h1>Login</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Login</a></div>
    <div class="clear"></div>
  </div>
</section>
<a id="log"></a>
<section class="module login">
  <div class="container">

    <div class="row">
      <div class="col-lg-4 col-lg-offset-4"> 
        <p>Não possui cadastro? <strong><a href="cadastre-se">Cadastre-se aqui.</a></strong></p> 
        <form method="post" class="login-form" action="#log" name="formlog" id="formlog">
          
          <div class="form-block">
            <label>Email</label>
            <input class="border" type="email" name="email" required />
          </div>
          <div class="form-block">
            <label>Password</label>
            <input class="border" type="password" name="pass" required/>
          </div>
          
          <div class="form-block">

            <?php if($enviolog=="s"){
                            echo $msgslog;
                          }
                            ?>


            <button class="button button-icon" type="submit"><i class="fa fa-angle-right"></i>Login</button>
            <input name="enviolog" type="hidden" id="enviolog" value="s" />
          </div>
          <div class="divider"></div>
          <p class="note"><a href="senha">Esqueci minha senha.</a> </p>    
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