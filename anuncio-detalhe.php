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
  <title>Homely | Property Single</title>

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
    <h1>Detalhe do Anuncio</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> Properties <i class="fa fa-angle-right"></i> <a href="#" class="current">123 Smith Drive</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module">
  <div class="container">
  
	<div class="row">
		<div class="col-lg-8 col-md-8">
		
			<div class="property-single-item property-main">
				<div class="property-header">
					<div class="property-title">
						<h4>Modern Family Home</h4>
            <div class="property-price-single right">$255,000 <span>Per Month</span></div>
						<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
            <div class="clear"></div>
					</div>
					<div class="property-single-tags">
						<div class="property-tag button alt featured">Featured</div>
						<div class="property-tag button status">For Rent</div>
						<div class="property-type right">Property Type: <a href="#">Family Home</a></div>
					</div>
				</div>

				<table class="property-details-single">
					<tr>
						<td><i class="fa fa-bed"></i> <span>3</span> Beds</td>
						<td><i class="fa fa-tint"></i> <span>2</span> Baths</td>
						<td><i class="fa fa-expand"></i> <span>25,000</span> Sq Ft</td>
						<td><i class="fa fa-car"></i> <span>1</span> Garage</td>
					</tr>
				</table>

        <div class="property-gallery">
          <div class="slider-nav slider-nav-property-gallery">
            <span class="slider-prev"><i class="fa fa-angle-left"></i></span>
            <span class="slider-next"><i class="fa fa-angle-right"></i></span>
          </div>
          <div class="slide-counter"></div>
          <div class="slider slider-property-gallery">
            <div class="slide"><img src="images/1837x1206.png" alt="" /></div>
            <div class="slide"><img src="images/1837x1206.png" alt="" /></div>
            <div class="slide"><img src="images/1837x1206.png" alt="" /></div>
            <div class="slide"><img src="images/1837x1206.png" alt="" /></div>
            <div class="slide"><img src="images/1837x1206.png" alt="" /></div>
            <div class="slide"><img src="images/1837x1206.png" alt="" /></div>
            <div class="slide"><img src="images/1837x1206.png" alt="" /></div>
          </div>
          <div class="slider property-gallery-pager">
            <a class="property-gallery-thumb"><img src="images/1837x1206.png" alt="" /></a>
            <a class="property-gallery-thumb"><img src="images/1837x1206.png" alt="" /></a>
            <a class="property-gallery-thumb"><img src="images/1837x1206.png" alt="" /></a>
            <a class="property-gallery-thumb"><img src="images/1837x1206.png" alt="" /></a>
            <a class="property-gallery-thumb"><img src="images/1837x1206.png" alt="" /></a>
            <a class="property-gallery-thumb"><img src="images/1837x1206.png" alt="" /></a>
            <a class="property-gallery-thumb"><img src="images/1837x1206.png" alt="" /></a>
          </div>
        </div>

			</div><!-- end property title and gallery -->

			<div class="widget property-single-item property-description content">
				<h4>
					<span>Description</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
					<div class="divider-fade"></div>
				</h4>
				<p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam 
				in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut 
				tristique elit risus at metus. Sed fermentum, lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis 
				mi tortor finibus turpis.
				</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. 
				Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. 
				Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, 
				a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper 
				placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. 
				Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet 
				tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.</p>

				<div class="tabs">
			        <ul>
			          <li><a href="#tabs-1"><i class="fa fa-pencil icon"></i>Additional Details</a></li>
			          <li><a href="#tabs-2"><i class="fa fa-crop icon"></i>Floor Plans</a></li>
			          <li><a href="#tabs-3"><i class="fa fa-files-o icon"></i>Attachments</a></li>
			        </ul>
			        <div id="tabs-1" class="ui-tabs-hide">
			          <ul class="additional-details-list">
			          	<li>Property ID: <span>11234</span></li>
			          	<li>Contact: <span>Rent</span></li>
			          	<li>Type: <span>Single Family Home</span></li>
			          	<li>Year Built: <span>2001</span></li>
			          	<li>Lot Dimensions: <span>50x60 ft</span></li>
			          	<li>Deposit Amount: <span>20%</span></li>
			          </ul>
			        </div>
			        <div id="tabs-2" class="ui-tabs-hide">
			          <a href="#"><img src="images/floor-plan1.jpg" alt="" /></a>
			        </div>
			        <div id="tabs-3" class="ui-tabs-hide">
			          <a href="#"><i class="fa fa-file-o icon"></i> Lease Agreement</a><br/><br/>
			          <a href="#"><i class="fa fa-file-o icon"></i> Brochure</a><br/><br/>
			          <a href="#"><i class="fa fa-file-o icon"></i> Property Details</a>
			        </div>
			    </div>
			</div><!-- end description -->

			<div class="widget property-single-item property-amenities">
				<h4>
					<span>Amenities</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
					<div class="divider-fade"></div>
				</h4>
				<ul class="amenities-list">
					<li><i class="fa fa-check icon"></i> Balcony</li>
					<li><i class="fa fa-check icon"></i> Cable TV</li>
					<li><i class="fa fa-check icon"></i> Deck</li>
					<li><i class="fa fa-check icon"></i> Dishwasher</li>
					<li><i class="fa fa-check icon"></i> Heating</li>
					<li><i class="fa fa-close icon"></i> Internet</li>
					<li><i class="fa fa-check icon"></i> Parking</li>
					<li><i class="fa fa-check icon"></i> Pool</li>
					<li><i class="fa fa-check icon"></i> Oven</li>
					<li><i class="fa fa-close icon"></i> Gym</li>
					<li><i class="fa fa-check icon"></i> Laundry Room</li>
				</ul>
			</div><!-- end amenities -->

			<div class="widget property-single-item property-location">
				<h4>
					<span>Location</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
					<div class="divider-fade"></div>
				</h4>
				<div id="map-single"></div>
			</div><!-- end location -->

			<div class="widget property-single-item property-agent">
				<h4>
					<span>Agent</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
					<div class="divider-fade"></div>
				</h4>
				<div class="agent">
			        <a href="#" class="agent-img">
			            <div class="img-fade"></div>
			            <div class="button alt agent-tag">68 Properties</div>
			            <img src="images/1197x1350.png" alt="" />
			        </a>
			        <div class="agent-content">
			            <a href="#" class="button button-icon small right"><i class="fa fa-angle-right"></i>Contact Agent</a>
			            <a href="#" class="button button-icon small grey right"><i class="fa fa-angle-right"></i>Agent Details</a>
			            <div class="agent-details">
			                <h4><a href="#">John Doe</a></h4>
			                <p><i class="fa fa-tag icon"></i>Buying Agent</p>
			                <p><i class="fa fa-envelope icon"></i>jdoe@homely.com</p>
			                <p><i class="fa fa-phone icon"></i>(123) 456-6789</p>
			            </div>
			            <ul class="social-icons">
			                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
			                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			            </ul>
			        </div>
			        <div class="clear"></div>
			    </div>
			</div><!-- end agent -->

			<div class="widget property-single-item property-related">
				<h4>
					<span>Related Properties</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
					<div class="divider-fade"></div>
				</h4>

				<div class="row">
			        <div class="col-lg-6 col-md-6">
			          <div class="property shadow-hover">
			            <a href="#" class="property-img">
			              <div class="img-fade"></div>
			              <div class="property-tag button alt featured">Featured</div>
			              <div class="property-tag button status">For Sale</div>
			              <div class="property-price">$150,000</div>
			              <div class="property-color-bar"></div>
			              <img src="images/1837x1206.png" alt="" />
			            </a>
			            <div class="property-content">
			              <div class="property-title">
			              <h4><a href="#">Modern Family Home</a></h4>
			                <p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
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
			              </span>
			              <div class="clear"></div>
			            </div>
			          </div>
			        </div>

			        <div class="col-lg-6 col-md-6">
			          <div class="property shadow-hover">
			            <a href="#" class="property-img">
			              <div class="img-fade"></div>
			              <div class="property-tag button alt featured">Featured</div>
			              <div class="property-tag button status">For Rent</div>
			              <div class="property-price">$6,500 <span>Per Month</span></div>
			              <div class="property-color-bar"></div>
			              <img src="images/1837x1206.png" alt="" />
			            </a>
			            <div class="property-content">
			              <div class="property-title">
			              <h4><a href="#">Beautiful Waterfront Condo</a></h4>
			                <p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
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
			              <span class="left"><i class="fa fa-calendar-o icon"></i> 1 week ago</span>
			              <span class="right">
			                <a href="#"><i class="fa fa-heart-o icon"></i></a>
			                <a href="#"><i class="fa fa-share-alt"></i></a>
			              </span>
			              <div class="clear"></div>
			            </div>
			          </div>
			        </div>

			    </div><!-- end row -->
			</div><!-- end related properties -->

		</div><!-- end col -->
		
		<div class="col-lg-4 col-md-4 sidebar sidebar-property-single">
		
			<div class="widget widget-sidebar advanced-search">
			  <h4><span>Faça uma pergunta</span> <img src="images/divider-half-white.png" alt="" /></h4>
			  <div class="widget-content box">
				<form>
				  
				  <div class="form-block">
					<label>Escreva aqui sua pergunta</label>
					<textarea class="requiredField" placeholder="" style="border: 1px solid #ccc;" name="message"></textarea>		
					<div class="clear"></div>
				  </div>

				  <div class="form-block">
					<input type="submit" class="button" value="Enviar" />
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&sensor=false"></script>
<script src="js/map-single.js"></script> <!-- google maps -->
<script src="js/global.js"></script>


</body>
</html>