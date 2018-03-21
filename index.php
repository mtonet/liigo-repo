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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="UTF-8">
  <meta name="description" content="Anuncie na Liigo - Mais de 30.000 usuários vendo o seu anúncio">
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
  

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <style type="text/css">
  <?php while($linesl2=$querysl2->fetch_array()){?>
        .subheader.subheader-slider .slide:nth-child(<?php echo $linesl2['id'];?>) { background:url(uploads/slide-home/<?php echo $linesl2['image'];?>) no-repeat center; background-size:cover; }
  <?php }?>
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
          <p>Mais de 30.000 usuários vendo o seu anúncio</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="service-item shadow-hover">
          <i class="fa fa-group"></i>
          <h4>Profissionais</h4>
          <p>Na Liigo todos os anunciantes são profissionais da área de comunicação</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="service-item shadow-hover">
          <i class="fa fa-file-text"></i>
          <h4>Atualização diária</h4>
          <p>Os anúncios são monitorados diariamente e o atendimento será excelente</p>
        </div>
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
        <a href="resultado-busca?buscaprinc=<?php echo $linemais['termo']?>" class="property-cat property-cat-apartments">
          <h3 style="text-transform: capitalize;"><?php echo $linemais['termo']?></h3>
          <div class="color-bar"></div>
          <span class="button alt small"><?php echo $numCont?> encontrados</span>
        </a>
      </div>
      <?php while($linemais2=$querymais2->fetch_array()){
        //anuncios
        $sqlcup2="SELECT * FROM tbl_anuncio WHERE (categoria like'%".$linemais2['termo']."%' OR marca like'%".$linemais2['termo']."%' OR cabeca_impressao like'%".$linemais2['termo']."%' OR tecnologia like'%".$linemais2['termo']."%' OR condicao like'%".$linemais2['termo']."%' OR descricao like'%".$linemais2['termo']."%') AND status='1'";
        $querycup2=$mysqli->query($sqlcup2);
        $numCont2=$querycup2->num_rows;
        if($numCont2!="0"){
        ?>
      <div class="col-lg-4 col-md-4">
        <a href="resultado-busca?buscaprinc=<?php echo $linemais2['termo']?>" class="property-cat property-cat-houses">
          <h3 style="text-transform: capitalize;"><?php echo $linemais2['termo']?></h3>
          <div class="color-bar"></div>
          <span class="button alt small"><?php echo $numCont2?> encontrados</span>
        </a>
      </div>
      <?php }}?>
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