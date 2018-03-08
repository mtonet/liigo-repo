<?php
//conn
require"conn/exe.php";
//regras
require"includes-acoes/regras/regras.php";
//session
require"includes-acoes/session/session.php";
//anuncio
require"includes-acoes/anuncio/assistencia-enviar.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Homely - Responsive Real Estate Template">
  <meta name="author" content="Rype Creative [Chris Gipple]">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liigo | Envio do Anuncio</title>
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
    <h1>Envio do anúncio</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Envio do anúncio</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module property-submit">
  <div class="container">

    <div class="row">
    <div class="col-lg-10 col-lg-offset-1">

      <div class="center">
        <div class="form-nav">
          <div class="form-nav-item"><span>1</span><br/> Informações do anúncio</div>
          <div class="form-nav-item"><span>2</span><br/> Imagens</div>
          <div class="form-nav-item completed"><span><i class="fa fa-check"></i></span><br/> Enviar</div>
          <div class="clear"></div>
        </div>
      </div>

      <div class="multi-page-form-content active">

        <table class="property-submit-title">
          <tr>
            <td><span class="property-submit-num">3</span></td>
            <td>
              <h4>Anúncio enviado com sucesso!</h4>
              <p>Recebemos seu anúncio e o mesmo irá passar por uma revisão e em breve será publicado.</p>
            </td>
          </tr>
        </table>

      </div><!-- end basic info -->

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


</body>
</html>