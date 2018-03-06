<?php
session_start();
//conn
require"conn/exe.php";
//regras
require"includes-acoes/regras/regras.php";
//session
require"includes-acoes/session/session.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Homely - Responsive Real Estate Template">
  <meta name="author" content="Rype Creative [Chris Gipple]">
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

<section class="module favorited-properties">
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

			<form>
				<div class="row">
					<div class="col-lg-3">
						<div class="edit-avatar">
							<img class="profile-avatar" src="images/1197x1350.png" alt="" />
							<a href="#" class="button small">Change Avatar</a>
						</div>
					</div>
					<div class="col-lg-9">
						
						<div class="form-block">
							<label>Full Name</label>
							<input class="border" type="text" name="name" value="John Doe" />
						</div>
						<div class="form-block">
							<label>Email</label>
							<input class="border" type="text" name="email" value="jdoe@gmail.com" />
						</div>
						<div class="form-block">
							<label>Phone</label>
							<input class="border" type="text" name="phone" value="443-123-2322" />
						</div>
					</div>
				</div><!-- end row -->
							
				<div class="form-block">
					<label>Bio</label>
					<textarea class="border" name="bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus.Phasellus mollis imperdiet placerat</textarea>
				</div>	
				
				<div class="row">
					<div class="col-lg-6">
						<h4>Social Profiles</h4>
						<div class="divider"></div>
						<div class="form-block">
							<label>Facebook</label>
							<input class="border" type="text" name="fb" value="facebook.com/johndoe" />
						</div>
						
						<div class="form-block">
							<label>Twitter</label>
							<input class="border" type="text" name="twitter" value="twitter.com/johndoe" />
						</div>
						
						<div class="form-block">
							<label>Linkedin</label>
							<input class="border" type="text" name="linkedin" value="linkedin.com/johndoe" />
						</div>
					</div>
					<div class="col-lg-6">
						<h4>Change Password</h4>
						<div class="divider"></div>
						<div class="form-block">
							<label>Current Password</label>
							<input class="border" type="text" name="current_pass" />
						</div>
						
						<div class="form-block">
							<label>New Password</label>
							<input class="border" type="text" name="new_pass" />
						</div>
						
						<div class="form-block">
							<label>Confirm New Password</label>
							<input class="border" type="text" name="new_pass_confirm" />
						</div>
					</div>
				</div><!-- end row -->
				
				<div class="form-block">
					<button type="submit" class="button button-icon"><i class="fa fa-check"></i>Save Changes</button>
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


</body>
</html>