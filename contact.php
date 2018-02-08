<?php
//If the form is submitted
if(isset($_POST['submitted'])) {

	// require a name from user
    if(trim($_POST['name']) === '') {
        $nameError =  'Forgot your name!'; 
        $hasError = true;
    } else {
        $name = trim($_POST['name']);
    }
	
	// need valid email
    if(trim($_POST['email']) === '')  {
        $emailError = 'Forgot to enter in your e-mail address.';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = 'You entered an invalid email address.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }
	
	// get phone
    if(trim($_POST['phone']) === '')  {
        $phone = '';
    } else {
        $phone = trim($_POST['phone']);
    }
	
	// get subject
    if(trim($_POST['subject']) === '')  {
        $subject = 'Submitted message from '.$name;
    } else {
        $subject = trim($_POST['subject']);
    }
	
	// we need at least some content
    if(trim($_POST['message']) === '') {
        $messageError = 'You forgot to enter a message!';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $message = stripslashes(trim($_POST['message']));
        } else {
            $message = trim($_POST['message']);
        }
    }
	
	// upon no failure errors let's email now!
    if(!isset($hasError)) {
	
		/*---------------------------------------------------------*/
        /* SET EMAIL YOUR EMAIL ADDRESS HERE                       */
        /*---------------------------------------------------------*/
        $emailTo = 'example@yoursite.com';
        $sendCopy = trim($_POST['sendCopy']);
        $body = "Name: $name \n\nEmail: $email \n\nPhone: $phone \n\nMessage: $message";
        $headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        mail($emailTo, $subject, $body, $headers);
        
        // set our boolean completion value to TRUE
        $emailSent = true;
	
	}

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Homely - Responsive Real Estate Template">
  <meta name="author" content="Rype Creative [Chris Gipple]">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liigo | Contato</title>

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
    <h1>Contato</h1>
    <div class="breadcrumb right">Contato liigo<i class="fa fa-angle-right"></i> <a href="#" class="current">Contato</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module contact-details">
  <div class="container">

    <div class="row">
      <div class="col-lg-3 col-md-3">
        <div class="contact-item">
          <i class="fa fa-envelope"></i>
          <h4>Email Us</h4>
          <p>hello@homely.com</p>
          <p>support@homely.com</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="contact-item">
          <i class="fa fa-phone"></i>
          <h4>Call Us</h4>
          <p>General: 123 456 5665</p>
          <p>Support: (+200) 123 456 5665</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="contact-item">
          <i class="fa fa-map-marker"></i>
          <h4>Visit Us</h4>
          <p>1234 Smith Drive<br/> Annapolis, MD 21012 USA</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="contact-item">
          <i class="fa fa-share-alt"></i>
          <h4>Connect With Us</h4>
          <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
        </div>
      </div>
    </div><!-- end row -->

  </div>
</section>


<section class="module">
  <div class="container">

    <div class="row">

      <div class="col-lg-8 col-md-8">

        <div class="comment-form">
          <h4><span>Contato</span> <img src="images/divider-half.png" alt="" /></h4>
          <p><b>Fill out the form below.</b> Morbi accumsan ipsum velit Nam nec tellus a odio tincidunt auctor a ornare odio sedlon maurisvitae erat consequat auctor</p>
          
		  <form method="post" id="contact-us">
		  
			<?php if(isset($emailSent) && $emailSent == true) { ?>
                <p class="alert-box success"><i class="fa fa-check icon"></i>Your email was sent!</p>
            <?php } else if(isset($hasError) || isset($captchaError) ) { ?>
                <p class="alert-box error"><i class="fa fa-close icon"></i>Error submitting the form</p>
            <?php } ?>
		  
            <div class="form-block">
              <label>
				Name *
				<?php if($nameError != '') { ?>
					<span class="error"><?php echo $nameError; ?></span> 
				<?php } ?>
			</label>
              <input class="requiredField" type="text" placeholder="Your Name" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>" />
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>
					Email *
					<?php if($emailError != '') { ?>
						<span class="error"><?php echo $emailError; ?></span> 
					<?php } ?>
				  </label>
                  <input class="email requiredField" type="text" placeholder="Your email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" />
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="form-block">
                  <label>Phone</label>
                  <input type="text" placeholder="Your phone" name="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];?>" />
                </div>
              </div>
            </div>
            <div class="form-block">
                  <label>Subject</label>
                  <input type="text" placeholder="Subject" name="subject" value="<?php if(isset($_POST['subject'])) echo $_POST['subject'];?>" />
                </div>
            <div class="form-block">
              <label>
				Message *
				<?php if($messageError != '') { ?>
					<span class="error"><?php echo $messageError; ?></span> 
				<?php } ?>
			  </label>
              <textarea class="requiredField" placeholder="Your message..." name="message"><?php if(isset($_POST['message'])) echo $_POST['message'];?></textarea>
            </div>
            <div class="form-block">
              <input type="submit" value="Submit" />
			  <input type="hidden" name="submitted" id="submitted" value="true" />
            </div>
          </form>
        </div>

        <div class="divider"></div><br/>
        <h4>Still need help?</h4>
        <p>If you still have questions, try visiting our <a href="#"><b>FAQ</b></a> page to assit you. Morbi accumsan ipsum velit Nam nec tellus a odio tincidunt auctor a ornare odio sedlon maurisvitae erat consequat auctor</p>

      </div>

  

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