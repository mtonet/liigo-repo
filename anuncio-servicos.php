<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Homely - Responsive Real Estate Template">
  <meta name="author" content="Rype Creative [Chris Gipple]">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liigo | Envio do Anuncio</title>

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
    <h1>Envio do anúncio</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Envio do anúncio</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module property-submit">
  <div class="container">

    <div class="row">
    <div class="col-lg-10 col-lg-offset-1">

    <form class="multi-page-form" method="post">

      <div class="center">
        <div class="form-nav">
          <div class="form-nav-item completed"><span><i class="fa fa-check"></i></span><br/> Informações do anúncio</div>
          <div class="form-nav-item"><span>2</span><br/> Imagens</div>
          <div class="form-nav-item"><span>3</span><br/> Enviar</div>
          <div class="clear"></div>
        </div>
      </div>

      <div class="multi-page-form-content active">

        <span class="button button-icon small right form-next"><i class="fa fa-angle-right"></i> Próximo</span>

        <table class="property-submit-title">
          <tr>
            <td><span class="property-submit-num">1</span></td>
            <td>
              <h4>Informações do anúncio</h4>
              <p>Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
            </td>
          </tr>
        </table>

             <div class="form-block border">
                  <label>Tipo de serviço*</label>
                    <select name="property-type" class="border">
                    <option></option>
                    <option value="family-house">Family House</option>
                    <option value="apartment">Apartment</option>
                    <option value="condo">Condo</option>
                  </select>
                </div>
                
            <div class="form-block">
              <label>Título*</label>
              <input class="border required" type="text" name="property-title" />
            </div>

            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Preço*</label>
                  <input class="border required" type="number" name="price" />
                </div>
              </div>        
            </div>

           <div class="form-block">
              <label>Descrição*</label>
              <textarea class="border" name="description"></textarea>
            </div>

            <span class="button button-icon small right form-next"><i class="fa fa-angle-right"></i> Próximo</span>
            <div class="clear"></div>

      </div><!-- end basic info -->

      <div class="multi-page-form-content">

        <span class="button button-icon small right form-next"><i class="fa fa-angle-right"></i> Enviar</span>
        <span class="button button-icon small right form-prev"><i class="fa fa-angle-left"></i> Anterior</span>

        <table class="property-submit-title">
          <tr>
            <td><span class="property-submit-num">2</span></td>
            <td>
              <h4>Imagens</h4>
              <p>Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
            </td>
          </tr>
        </table>

        <div class="form-block">
          <label>Imagem principal</label>
          <input type="file" name="featured-img" />
        </div>
        <br/>

        <div class="form-block gallery">
          <label>Galeria de imagens</label>
          <div class="additional-img-container">
                <table>
                    <tr>
                    <td>
                    <div class="media-uploader-additional-img">
                    <input type="file" class="additional_img" name="additional_img1" value="" />
                    <span class="delete-additional-img right"><i class="fa fa-trash"></i> Deletar</span>
                    </div>
                    </td>
                    </tr>
                </table>
            </div>
            <span class="button small add-additional-img">Add imagem</span>
        </div>

        <span class="button button-icon small right form-next"><i class="fa fa-angle-right"></i> Enviar</span>
        <span class="button button-icon small right form-prev"><i class="fa fa-angle-left"></i> Anterior</span>
        <div class="clear"></div>
      </div><!-- end property images -->


    </form>

  </div><!-- end col -->
  </div><!-- end row -->

  </div><!-- end container -->
</section>

<section class="module cta newsletter">
  <div class="container">
	<div class="row">
		<div class="col-lg-7 col-md-7">
			<h3>Sign up for our <strong>newsletter.</strong></h3>
			<p>Lorem molestie odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
		</div>
		<div class="col-lg-5 col-md-5">
			<form method="post" id="newsletter-form" class="newsletter-form">
				<input type="email" placeholder="Your email..." />
				<button type="submit" form="newsletter-form"><i class="fa fa-send"></i></button>
			</form>
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
<script src="assets/html5lightbox/html5lightbox.js"></script> <!-- lightbox -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&sensor=false"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
<script src="js/map-search.js"></script> <!-- google maps -->
<script src="js/global.js"></script>


</body>
</html>