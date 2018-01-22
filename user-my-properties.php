<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Homely - Responsive Real Estate Template">
  <meta name="author" content="Rype Creative [Chris Gipple]">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homely | My Properties</title>

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
    <h1>My Properties</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">My Properties</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module my-properties">
  <div class="container">
  
	<div class="row">
		<div class="col-lg-3 col-md-3 sidebar-left">
			<div class="widget member-card">
				<div class="member-card-header">
					<a href="#" class="member-card-avatar"><img src="images/1197x1350.png" alt="" /></a>
					<h3>John Doe</h3>
					<p><i class="fa fa-envelope icon"></i>jdoe@gmail.com</p>
				</div>
				<div class="member-card-content">
					<img class="hex" src="images/hexagon.png" alt="" />
					<ul>
						<li><a href="user-profile.php"><i class="fa fa-user icon"></i>Profile</a></li>
						<li class="active"><a href="user-my-properties.php"><i class="fa fa-home icon"></i>Meus anúncios</a></li>
						<li><a href="user-favorite-properties.php"><i class="fa fa-heart icon"></i>Favoritos</a></li>
						<li><a href="envio-anuncio.php"><i class="fa fa-plus icon"></i>Anuncie</a></li>
						<li><a href="#"><i class="fa fa-reply icon"></i>Chat</a></li>
						<li><a href="#"><i class="fa fa-reply icon"></i>Logout</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-lg-9 col-md-9">
			<table class="my-properties-list">
			  <tr>
				<th>Image</th>
				<th>Property</th>
				<th>Post Status</th>
				<th>Date Created</th>
				<th>Actions</th>
			  </tr>
			  <tr>
				<td class="property-img"><a href="property-single.html"><img src="images/1837x1206.png" alt="" /></a></td>
				<td class="property-title">
					<a href="property-single.html">Modern Family Home</a><br/>
					<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Drive, Baltimore, MD</p>
					<p><strong>$253,000</strong></p>
				</td>
				<td class="property-post-status"><span class="button small alt">Published</span></td>
				<td class="property-date">2/27/2017</td>
				<td class="property-actions">
					<a href="#"><i class="fa fa-eye icon"></i>View</a>
					<a href="#"><i class="fa fa-pencil icon"></i>Edit</a>
					<a href="#"><i class="fa fa-close icon"></i>Delete</a>
				</td>
			  </tr>
			  <tr>
				<td class="property-img"><a href="property-single.html"><img src="images/1837x1206.png" alt="" /></a></td>
				<td class="property-title">
					<a href="property-single.html">Ubran Apartment</a><br/>
					<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Drive, Baltimore, MD</p>
					<p><strong>$12,000</strong> Per Month</p>
				</td>
				<td class="property-post-status"><span class="button small grey">Pending</span></td>
				<td class="property-date">2/27/2017</td>
				<td class="property-actions">
					<a href="#"><i class="fa fa-eye icon"></i>View</a>
					<a href="#"><i class="fa fa-pencil icon"></i>Edit</a>
					<a href="#"><i class="fa fa-close icon"></i>Delete</a>
				</td>
			  </tr>
			  <tr>
				<td class="property-img"><a href="property-single.html"><img src="images/1837x1206.png" alt="" /></a></td>
				<td class="property-title">
					<a href="property-single.html">Modern Family Home</a><br/>
					<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Drive, Baltimore, MD</p>
					<p><strong>$253,000</strong></p>
				</td>
				<td class="property-post-status"><span class="button small alt">Published</span></td>
				<td class="property-date">2/27/2017</td>
				<td class="property-actions">
					<a href="#"><i class="fa fa-eye icon"></i>View</a>
					<a href="#"><i class="fa fa-pencil icon"></i>Edit</a>
					<a href="#"><i class="fa fa-close icon"></i>Delete</a>
				</td>
			  </tr>
			  <tr>
				<td class="property-img"><a href="property-single.html"><img src="images/1837x1206.png" alt="" /></a></td>
				<td class="property-title">
					<a href="property-single.html">Modern Family Home</a><br/>
					<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Drive, Baltimore, MD</p>
					<p><strong>$253,000</strong></p>
				</td>
				<td class="property-post-status"><span class="button small alt">Published</span></td>
				<td class="property-date">2/27/2017</td>
				<td class="property-actions">
					<a href="#"><i class="fa fa-eye icon"></i>View</a>
					<a href="#"><i class="fa fa-pencil icon"></i>Edit</a>
					<a href="#"><i class="fa fa-close icon"></i>Delete</a>
				</td>
			  </tr>
			  <tr>
				<td class="property-img"><a href="property-single.html"><img src="images/1837x1206.png" alt="" /></a></td>
				<td class="property-title">
					<a href="property-single.html">Modern Family Home</a><br/>
					<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Drive, Baltimore, MD</p>
					<p><strong>$253,000</strong></p>
				</td>
				<td class="property-post-status"><span class="button small alt">Published</span></td>
				<td class="property-date">2/27/2017</td>
				<td class="property-actions">
					<a href="#"><i class="fa fa-eye icon"></i>View</a>
					<a href="#"><i class="fa fa-pencil icon"></i>Edit</a>
					<a href="#"><i class="fa fa-close icon"></i>Delete</a>
				</td>
			  </tr>
			</table>
			
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
<script src="js/global.js"></script>


</body>
</html>