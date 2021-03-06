<?php
session_start();
//conn
require"conn/exe.php";
//regras
require"includes-acoes/regras/regras.php";
//home
require"includes-acoes/home/home.php";
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

<!--Banners DFP-->
<!-- Start GPT Async Tag -->
<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>


<script>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
</script>
<script>

 // GPT slots
 var gptAdSlots = [];
 googletag.cmd.push(function() {
 var mapping = googletag.sizeMapping().
  addSize([320, 0], [300, 250]).

   // Landscape tablet 
   //addSize([750, 200], [728, 90]). 

   // Desktop
   addSize([1050, 200], [970, 250]).build();

   // Define the GPT slot
   gptAdSlots[0] = googletag.defineSlot('/21722728057/home', [970, 250], 'div-gpt-ad-7791044-3').
       defineSizeMapping(mapping).
       addService(googletag.pubads());
   googletag.pubads().setTargeting("test","responsive");

   // Start ad fetching
   googletag.enableServices();
 });
</script>


<!-- End GPT Async Tag -->

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="UTF-8">
  <meta name="description" content="Plataforma de anúncios totalmente gratuita onde o acesso é direto e focado entre o anunciante e o cliente. Na Liigo você anuncia produtos para comunicação visual, gráfica, têxtil, impressão 3D. Divulgue seus equipamentos como impressoras digitais, impressoras 3d, serviços de impressão papel de parede, banner etc, assistência técnica, transportadoras e muito mais.">
  <meta name="author" content="MãonaWeb">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liigo</title>
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
  
  
  <!-- SOCIAL IMAGE -->
          <meta property="og:image" content="imgsocial.jpg"/>
          <meta property="og:image:type" content="image/jpeg">
          <meta property="og:image:width" content="800">
          <meta property="og:image:height" content="600">
  
  

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <style type="text/css">
  <?php 
  $a=1;
  while($linesl2=$querysl2->fetch_array()){?>
        .subheader.subheader-slider .slide:nth-child(<?php echo $a;?>) { background:url(uploads/slide-home/<?php echo $linesl2['image'];?>) no-repeat center; background-size:cover; }
  <?php $a++;}?>
  </style>
  
</head>
<body>

<?php require"includes/header/header.php";?>

<section class="subheader subheader-slider">
  <div class="slider-wrap">

  	<div class="slider-nav slider-nav-simple-slider">
  		<span class="slider-prev"><i class="fa fa-angle-left"></i></span>
  		<span class="slider-next"><i class="fa fa-angle-right"></i></span>
  	</div>

  	<div class="slider slider-simple">
  	 
  		<?php while($linesl=$querysl->fetch_array()){?>
      
      <div class="slide" id="<?php echo $linesl['id'];?>">
        <div class="img-overlay black"></div>
        <div class="container">
          <h1><?php echo $linesl['texto1'];?></h1>
          <p><?php echo $linesl['texto2'];?></p>
        </div>
      </div>
      <?php }?>
  	
  	</div><!-- end slider -->
  </div><!-- end slider wrap -->
</section>

<section class="module services">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="service-item shadow-hover">
          <i class="fa fa-home"></i>
          <h4>Anuncie</h4>
          <p>Divulgue seu produto em uma plataforma digital totalmente gratuita e focada para o mercado de comunicação visual, gráfica, sublimação, Têxtil e impressão 3D.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="service-item shadow-hover">
          <i class="fa fa-group"></i>
          <h4>Profissionais</h4>
          <p>Equipamentos, suprimentos, serviços, assistência técnica e transportadoras você encontra na Liigo os melhores profissionais do mercado.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="service-item shadow-hover">
          <i class="fa fa-file-text"></i>
          <h4>Atualização diária</h4>
          <p>Os anúncios são monitorados diariamente e o atendimento será excelente.</p>
        </div>
      </div>
    </div><!-- end row -->
  </div><!-- end container -->
</section>
<style>
div.banner-dfp {
        text-align: center; }
    </style>

<section class="module super-banner">
  <div class="container">
    <div class="row">

      <div class="col-lg-12 col-md-12">
        <!--a href="https://bit.ly/2sgqFxw" target="_blank"><img src="images/super-banner.jpg" alt="" class="img-responsive"></a-->
        
        <!-- Async AdSlot 3 for Ad unit 'home' ### Size: [[970,250]] -->
<!-- Adslot's refresh function: googletag.pubads().refresh([gptadslots[2]]) -->
<div id='div-gpt-ad-7791044-3' class="banner-dfp">
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-7791044-3'); });
  </script>
</div>
<!-- End AdSlot 3 -->

      </div>
    </div><!-- end row -->

  </div><!-- end container -->
</section>


<section class="module property-categories">
  <div class="container">

    <div class="module-header">
      <h2>As buscas <strong>mais populares</strong></h2>
      <img src="images/divider.png" alt="" />
      <p>Diariamente nossos usuários realizam diversas pesquisas, veja aqui quais são as mais procuradas</p>
    </div>

    <div class="row">

      <div class="col-lg-8 col-md-8">
        <a href="resultado-busca?buscaprinc=<?php echo $linemais['termo']?>" class="property-cat property-cat-apartments one-alta">
          <h3 style="text-transform: capitalize;"><?php echo $linemais['termo']?></h3>
          <div class="color-bar"></div>
          <span class="button alt small"><?php echo $numCont?> encontrados</span>
        </a>
      </div>
      <?php 
      $i=0;
      while($linemais2=$querymais2->fetch_array()){
        //anuncios
        $sqlcup2="SELECT * FROM tbl_anuncio WHERE (categoria like'%".$linemais2['termo']."%' OR marca like'%".$linemais2['termo']."%' OR cabeca_impressao like'%".$linemais2['termo']."%' OR tecnologia like'%".$linemais2['termo']."%' OR condicao like'%".$linemais2['termo']."%' OR descricao like'%".$linemais2['termo']."%') AND status='1'";
        $querycup2=$mysqli->query($sqlcup2);
        $numCont2=$querycup2->num_rows;
        if($numCont2!="0"){
          if($i=="0"){$css="two-alta";}elseif($i=="1"){$css="three-alta";}elseif($i=="2"){$css="four-alta";}elseif($i=="3"){$css="five-alta";}
        ?>
      <div class="col-lg-4 col-md-4">
        <a href="resultado-busca?buscaprinc=<?php echo $linemais2['termo']?>" class="property-cat property-cat-houses <?php echo $css;?>">
          <h3 style="text-transform: capitalize;"><?php echo $linemais2['termo']?></h3>
          <div class="color-bar"></div>
          <span class="button alt small"><?php echo $numCont2?> encontrados</span>
        </a>
      </div>
      <?php $i++;}}?>
    </div><!-- end row -->

  </div><!-- end container -->
</section>

<section class="module partners">
  <div class="container">

    <div class="module-header">
      <h2>Veja os parceiros da <strong>Liigo</strong></h2>
      <img src="images/divider.png" alt="" />
      <p>Grandes empresas já fazem parte da nossa plataforma</p>
    </div>

    <div class="row">

            <div class="col-lg-4 col-md-4">
            <img src="http://liigo.com.br/images/mimaki.jpg" alt="" class="property-cat property-cat-houses">
    
      </div>
            <div class="col-lg-4 col-md-4">
            <img src="http://liigo.com.br/images/amplytech.jpg" alt="" class="property-cat property-cat-houses">
          </div>
            <div class="col-lg-4 col-md-4">
            <a href="http://www.akad.com.br/" target="_blank"><img src="http://liigo.com.br/images/akad.jpg" alt="" class="property-cat property-cat-houses"></a>
      </div>         
                    

            <div class="col-lg-4 col-md-4" style="margin-top: 30px;">
            <a href="https://bit.ly/2IV2D5n" target="_blank"><img src="http://liigo.com.br/images/ferdof.jpg" alt="" class="property-cat property-cat-houses"></a>
    
      </div>
            <div class="col-lg-4 col-md-4" style="margin-top: 30px;">
             <a href="https://bit.ly/2LLWZAn" target="_blank"><img src="http://liigo.com.br/images/brgroup.jpg" alt="" class="property-cat property-cat-houses"></a>
           
          </div>
            <div class="col-lg-4 col-md-4" style="margin-top: 30px;">
            <a href="https://bit.ly/2sgqFxw" target="_blank"><img src="http://liigo.com.br/images/gf.jpg" alt="" class="property-cat property-cat-houses"></a>
            
      </div>
         
         <div class="col-lg-4 col-md-4" style="margin-top: 30px;">
            <a href="https://goo.gl/wH36JU" target="_blank"><img src="http://liigo.com.br/images/signin.jpg" alt="" class="property-cat property-cat-houses"></a>
            
      </div>
         
         <div class="col-lg-4 col-md-4" style="margin-top: 30px;">
            <a href="https://goo.gl/b9mfxH" target="_blank"><img src="http://liigo.com.br/images/agfa.jpg" alt="" class="property-cat property-cat-houses"></a>
            
      </div>
      
      <div class="col-lg-4 col-md-4" style="margin-top: 30px;">
            <a href="https://www.fespabrasil.com.br/pt/visitar/cadastro/?utm_source=media-partner-liigo" target="_blank"><img src="http://liigo.com.br/images/digital-print.jpg" alt="" class="property-cat property-cat-houses"></a>
            
      </div>
          </div><!-- end row -->

  </div><!-- end container -->
</section>




<!--<section class="module testimonials">

  <div class="container">
    <div class="module-header">
      <h2><strong>Quem utiliza?</strong></h2>
      <img src="images/divider-white.png" alt="" />
      <p>Veja a opinião de todos que gostam da LIIGO</p>
    </div>
  </div>

  <div class="slider-nav slider-nav-testimonials">
    <span class="slider-prev"><i class="fa fa-angle-left"></i></span>
    <span class="slider-next"><i class="fa fa-angle-right"></i></span>
  </div>

  <div class="container">
    <div class="slider slider-testimonials">
      <?php while($linedep=$querydep->fetch_array()){?>
      <div class="testimonial slide">
        <h3>"<?php echo $linedep['depoimento']?>"</h3>
        <div class="testimonial-details">
          <?php if($linedep['avatar']!=""){?>
          <img class="testimonial-img" src="uploads/depoimentos/<?php echo $linedep['avatar']?>" alt="<?php echo $linedep['nome']?>" />
          <?php }else{?>
          <img class="testimonial-img" src="uploads/depoimentos/no.jpg" alt="<?php echo $linedep['nome']?>" />
          <?php }?>
          <p class="testimonial-name"><strong><?php echo $linedep['nome']?></strong></p>
          <span class="testiomnial-title"><em><?php echo $linedep['profissao']?></em></span>
        </div>
      </div>
      <?php }?>
    </div>
  </div>
</section>-->
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
<script src="js/pbox.js"></script>
</body>
</html>