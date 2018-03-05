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
  <title>Liigo | Equipamentos</title>

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

<section class="subheader subheader-listing-sidebar">
  <div class="container">
    <h1>Lista de Anúncios</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Categoria do Anúncio</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module">
  <div class="container">
  
	<div class="row">
		<div class="col-lg-8 col-md-8">
		
			<div class="property-listing-header">
				<span class="property-count left">8 properties found</span>
				<form action="#" method="get" class="right">
					<select name="sort_by" onchange="this.form.submit();">
						<option value="date_desc">New to Old</option>
						<option value="date_asc">Old to New</option>
						<option value="price_desc">Price (High to Low)</option>
						<option value="price_asc">Price (Low to High)</option>
					</select>
				</form>
				<div class="property-layout-toggle right">
					<a href="property-listing-grid-sidebar.html" class="property-layout-toggle-item"><i class="fa fa-th-large"></i></a>
					<a href="property-listing-row-sidebar.html" class="property-layout-toggle-item active"><i class="fa fa-bars"></i></a>
				</div>
				<div class="clear"></div>
			</div><!-- end property listing header -->
			
			<div class="property property-row property-row-sidebar shadow-hover">
		      <a href="#" class="property-img">
		        <div class="img-fade"></div>
		        <div class="property-tag button status">For Sale</div>
		        <div class="property-price">$150,000</div>
		        <div class="property-color-bar"></div>
		        <img src="images/1837x1206.png" alt="" />
		      </a>
		      <div class="property-content">
		        <div class="property-title">
		          <h4><a href="#">Modern Family Home</a></h4>
		          <p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
		          <div class="clear"></div>
		          <p class="property-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt...</p>
		        </div>
		        <table class="property-details">
		          <tr>
		            <td><i class="fa fa-bed"></i> 3 Beds</td>
		            <td><i class="fa fa-tint"></i> 2 Baths</td>
		            <td><i class="fa fa-expand"></i> 25,000 Sq Ft</td>
		          </tr>
		        </table>
		      </div>
		      <div class="property-footer">
		        <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
		        <span class="right">
		          <a href="#"><i class="fa fa-heart-o icon"></i></a>
		          <a href="#"><i class="fa fa-share-alt"></i></a>
		          <a href="#" class="button button-icon"><i class="fa fa-angle-right"></i>Details</a>
		        </span>
		        <div class="clear"></div>
		      </div>
		      <div class="clear"></div>
		  </div>

		  <div class="property property-row property-row-sidebar shadow-hover">
		      <a href="#" class="property-img">
		        <div class="img-fade"></div>
		        <div class="property-tag button status">For Rent</div>
		        <div class="property-price">$6,500 <span>Per Month</span></div>
		        <div class="property-color-bar"></div>
		        <img src="images/1837x1206.png" alt="" />
		      </a>
		      <div class="property-content">
		        <div class="property-title">
		          <h4><a href="#">Beautiful Waterfront Condo</a></h4>
		          <p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
		          <div class="clear"></div>
		          <p class="property-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt...</p>
		        </div>
		        <table class="property-details">
		          <tr>
		            <td><i class="fa fa-bed"></i> 3 Beds</td>
		            <td><i class="fa fa-tint"></i> 2 Baths</td>
		            <td><i class="fa fa-expand"></i> 25,000 Sq Ft</td>
		          </tr>
		        </table>
		      </div>
		      <div class="property-footer">
		        <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
		        <span class="right">
		          <a href="#"><i class="fa fa-heart-o icon"></i></a>
		          <a href="#"><i class="fa fa-share-alt"></i></a>
		          <a href="#" class="button button-icon"><i class="fa fa-angle-right"></i>Details</a>
		        </span>
		        <div class="clear"></div>
		      </div>
		      <div class="clear"></div>
		  </div>

		  <div class="property property-row property-row-sidebar shadow-hover">
		      <a href="#" class="property-img">
		        <div class="img-fade"></div>
		        <div class="property-tag button status">For Sale</div>
		        <div class="property-price">$600,500</div>
		        <div class="property-color-bar"></div>
		        <img src="images/1837x1206.png" alt="" />
		      </a>
		      <div class="property-content">
		        <div class="property-title">
		          <h4><a href="#">Urban Apartment</a></h4>
		          <p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
		          <div class="clear"></div>
		          <p class="property-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt...</p>
		        </div>
		        <table class="property-details">
		          <tr>
		            <td><i class="fa fa-bed"></i> 3 Beds</td>
		            <td><i class="fa fa-tint"></i> 2 Baths</td>
		            <td><i class="fa fa-expand"></i> 25,000 Sq Ft</td>
		          </tr>
		        </table>
		      </div>
		      <div class="property-footer">
		        <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
		        <span class="right">
		          <a href="#"><i class="fa fa-heart-o icon"></i></a>
		          <a href="#"><i class="fa fa-share-alt"></i></a>
		          <a href="#" class="button button-icon"><i class="fa fa-angle-right"></i>Details</a>
		        </span>
		        <div class="clear"></div>
		      </div>
		      <div class="clear"></div>
		  </div>

		  <div class="property property-row property-row-sidebar shadow-hover">
		      <a href="#" class="property-img">
		        <div class="img-fade"></div>
		        <div class="property-tag button status">For Sale</div>
		        <div class="property-price">$220,300</div>
		        <div class="property-color-bar"></div>
		        <img src="images/1837x1206.png" alt="" />
		      </a>
		      <div class="property-content">
		        <div class="property-title">
		          <h4><a href="#">Beautiful Waterfront Condo</a></h4>
		          <p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
		          <div class="clear"></div>
		          <p class="property-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt...</p>
		        </div>
		        <table class="property-details">
		          <tr>
		            <td><i class="fa fa-bed"></i> 3 Beds</td>
		            <td><i class="fa fa-tint"></i> 2 Baths</td>
		            <td><i class="fa fa-expand"></i> 25,000 Sq Ft</td>
		          </tr>
		        </table>
		      </div>
		      <div class="property-footer">
		        <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
		        <span class="right">
		          <a href="#"><i class="fa fa-heart-o icon"></i></a>
		          <a href="#"><i class="fa fa-share-alt"></i></a>
		          <a href="#" class="button button-icon"><i class="fa fa-angle-right"></i>Details</a>
		        </span>
		        <div class="clear"></div>
		      </div>
		      <div class="clear"></div>
		  </div>

		  <div class="property property-row property-row-sidebar shadow-hover">
		      <a href="#" class="property-img">
		        <div class="img-fade"></div>
		        <div class="property-tag button status">For Sale</div>
		        <div class="property-price">$150,000</div>
		        <div class="property-color-bar"></div>
		        <img src="images/1837x1206.png" alt="" />
		      </a>
		      <div class="property-content">
		        <div class="property-title">
		          <h4><a href="#">Modern Family Home</a></h4>
		          <p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
		          <div class="clear"></div>
		          <p class="property-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt...</p>
		        </div>
		        <table class="property-details">
		          <tr>
		            <td><i class="fa fa-bed"></i> 3 Beds</td>
		            <td><i class="fa fa-tint"></i> 2 Baths</td>
		            <td><i class="fa fa-expand"></i> 25,000 Sq Ft</td>
		          </tr>
		        </table>
		      </div>
		      <div class="property-footer">
		        <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
		        <span class="right">
		          <a href="#"><i class="fa fa-heart-o icon"></i></a>
		          <a href="#"><i class="fa fa-share-alt"></i></a>
		          <a href="#" class="button button-icon"><i class="fa fa-angle-right"></i>Details</a>
		        </span>
		        <div class="clear"></div>
		      </div>
		      <div class="clear"></div>
		 	</div>
			
			<div class="pagination">
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
			</div>
		
		</div><!-- end listing -->
		
		<div class="col-lg-4 col-md-4 sidebar">
		
			<div class="widget widget-sidebar sidebar-properties advanced-search">
			  <h4><span>Filtre sua busca</span> <img src="images/divider-half-white.png" alt="" /></h4>
			  <div class="widget-content box">
				<form>
				  <div class="form-block border">
					<label for="property-location">Condição do equipamento</label>
					<select id="property-location" class="border">
					  <option value="">Todos</option>
                <option value="Apartment">Novo</option>
                <option value="Beach House">Usado</option>
					</select>
				  </div>

				  <div class="form-block border">
					<label for="property-status">Tipo de equipamento</label>
					<select id="property-status" class="border">
					 <option value="">Todos</option>
                <option value="">Impressora Solvente / Ecosolvente</option>
                <option value="Apartment">Impressora com recorte conjugado</option>
                <option value="Beach House">Impressora UV</option>
                <option value="Condo">Impressora Sublimática</option>
                <option value="Family House">Impressora direta em tecido</option>
                <option value="Villa">Impressoras 3D</option>
                <option value="Villa">Plotter de recorte</option>
                <option value="Villa">Prensa Térmica</option>
                <option value="Villa">Router</option>
                <option value="Villa">Corte a Laser</option>
                <option value="Villa">Calandra</option>
                <option value="Villa">Laminadora</option>
                <option value="Villa">Nobreak</option>
					</select>
				  </div>

				  <div class="form-block border">
					<label for="property-type">Marcas</label>
					<select id="property-type" class="border">
					  <option value="">Todas</option>
                <option value="Villa">3D Systems</option>
                <option value="Villa">AGFA</option>
                <option value="Villa">Ampla</option>
                <option value="Villa">Banner Jet</option>
                <option value="Villa">Efi</option>
                <option value="Villa">Epson</option>
                <option value="Villa">Esko</option>
                <option value="Villa">FlockColor</option>
                <option value="Villa">Hp</option>
                <option value="Villa">ISSuprimentos</option>
                <option value="Villa">J- teck</option>
                <option value="Villa">KG Print</option>
                <option value="Villa">Maquinatec</option>
                <option value="Villa">Mecolor</option>
                <option value="Villa">Mimaki</option>
                <option value="Villa">Mutoh</option>
                <option value="Villa">Nova Dampex</option>
                <option value="Villa">Nova Jet</option>
                <option value="Villa">Oce</option>
                <option value="Villa">Potencial Laser</option>
                <option value="Villa">Prisma Jet</option>
                <option value="Villa">Roland</option>
                <option value="Villa">Stratasys</option>
                <option value="Villa">Tex Jet</option>
                <option value="Villa">Tucano equipamentos</option>
                <option value="Villa">Cliever</option>
                <option value="Villa">Yguaçu Maquinas</option>  
					</select>
				  </div>
				  


				  <div class="form-block border">
					<label>Cabeça de impressão</label>
					<select name="beds" id="property-beds" class="border">
					  <option value="">Todas</option>
                <option value="Villa">3D Systems</option>
                <option value="Villa">AGFA</option>
                <option value="Villa">Ampla</option>
                <option value="Villa">Banner Jet</option>
                <option value="Villa">Efi</option>
                <option value="Villa">Epson</option>
                <option value="Villa">Esko</option>
                <option value="Villa">FlockColor</option>   
					</select>
				  </div>

              				  <div class="form-block">
            <label>Preço</label>
            <div class="price-slider" id="price-slider"></div>
          </div>
              
	

				  <div class="form-block">
					<input type="submit" class="button" value="Filtrar" />
				  </div>
				</form>
			  </div><!-- end widget content -->
			</div><!-- end widget -->
			
		
		</div><!-- end sidebar -->
		
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
<script src="js/global.js"></script>


</body>
</html>