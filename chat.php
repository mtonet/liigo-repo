<?php
session_start();
//conn
require"conn/exe.php";
//regras
require"includes-acoes/regras/regras.php";
//session
require"includes-acoes/session/session.php";
//chat
require"includes-acoes/chat/chat.php";
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
  <title>Liigo | Chat</title>
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
  
  
          <!-- css chat -->
          <link rel="stylesheet" type="text/css" href="css/chat1.css" />
        
        
        <!--[if lt IE 9]>
                <script src="https://http2.mlstatic.com/static/org-img/ch/vendor/html5shiv/html5shiv-3.7.0.js"></script>
            <![endif]-->
            <link rel="stylesheet" href="css/chat2.css"/>
            
            

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
    <h1>Chat</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">chat</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module favorited-properties">
  <div class="container">
  
	<div class="row">
		<div class="col-lg-3 col-md-3 sidebar-left">
			<div class="widget member-card">
				<div class="member-card-header">
					<a href="#" class="member-card-avatar">
                        <?php if($linedpu['avatar']==""){?>
                        <img src="uploads/usuarios/no.jpg" alt="<?php echo $linedpu['avatar'];?>" />
                        <?php }else{?>
                        <img src="uploads/usuarios/<?php echo $linedpu['avatar'];?>" alt="<?php echo $linedpu['avatar'];?>" />
                        <?php }?>
                    </a>
					<h3><?php echo $linedpu['nome']?></h3>
					<p><i class="fa fa-envelope icon"></i><?php echo $linedpu['email']?></p>
				</div>
				<div class="member-card-content">
					<img class="hex" src="images/hexagon.png" alt="" />
					<ul>
						<li><a href="meu-perfil"><i class="fa fa-user icon"></i>Perfil</a></li>
                        <li><a href="meus-anuncios"><i class="fa fa-home icon"></i>Meus anúncios</a></li>
                        <li><a href="favoritos"><i class="fa fa-heart icon"></i>Favoritos</a></li>
                        <li><a href="anuncie"><i class="fa fa-plus icon"></i>Anuncie</a></li>
                        <li class="active"><a href="chat"><i class="fa fa-plus icon"></i>Chat</a></li>
                        <li><a href="logout"><i class="fa fa-reply icon"></i>Logout</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-lg-9 col-md-9">
		
        <?php if($numchat!=""){?>
		<div id="accordion" class="ui-accordion ui-widget ui-helper-reset" role="tablist">

<?php
while($linechat=$querychat->fetch_array()){
?>

<h3 class="panel-collapse collapse" id="<?php echo $linechat['id_chat']?>" aria-controls="<?php echo $linechat['id_chat']?>" data-toggle="collapse">
<span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span><?php echo $linechat['anuncio']?></h3>

          <div class="panel-collapse collapse" style="" id="<?php echo $linechat['id_chat']?>" aria-labelledby="<?php echo $linechat['id_chat']?>">

    <div class="main-app-container">
    <article id="app-container" class="ui-box myml-ui-box">
    <div class="messsages--controls">
    <div class="messaging-blocked ml-blocked blocked"></div>

<div class=" messaging-newroom  messaging-newroom--realtime">
        <div class="messaging--messages-container" data-js="messages">
            <div class="messaging-messages">

<?php 
//data
$listachatdta="SELECT id_chat,data FROM tbl_chat WHERE id_chat='".$linechat['id_chat']."' GROUP BY data ORDER BY data ASC";
$querychatdta=$mysqli->query($listachatdta);
while($linechatdta=$querychatdta->fetch_array()){
?>   

<div class="message-date">
<small class="message-date__key"><?php echo date("d/m/Y", strtotime($linechatdta['data']))?></small>
</div>

<?php 
$listachatmsg="SELECT * FROM tbl_chat WHERE id_chat='".$linechat['id_chat']."' AND data='".$linechatdta['data']."' ORDER BY data ASC";
$querychatmsg=$mysqli->query($listachatmsg);    
while($linechatmsg=$querychatmsg->fetch_array()){
?>

<div class="messaging-messages-line"> 
<article class="message <?php if($dadosla['id_cod']!=$linechatmsg['id_user']){?>message--sender<?php }else{?>message--receiver<?php }?>">
<div class="u--arrange-fill message__message">
            <div class="message__box">
                <p class="message__name"><?php if($dadosla['id_cod']==$linechatmsg['id_user']){?><strong><?php echo $linechatmsg['nome_user_anuncio']?></strong><?php }?></p>
                        <p class="message__text"><?php echo $linechatmsg['msg']?></p>
                <p class="message__time">
                            <span class="message__tick message_tick_read ch-icon-done-all"></span>
                    <span class="message__timestamp"><?php echo date("H:i", strtotime($linechatmsg['hora']))?></span>
                </p>
            </div>
    </div>
</article>
</div>

<?php }?>



<?php }?>
</div>
</div>

    

        <div class="messaging--controls-container" data-js="controls">
        <div class="message-controls">
            <form class="message-controls__form u--clearfix enabled" action="?area=<?php echo $linechat['id_chat']?>&anuncio=<?php echo $linechat['id_anuncio']?>" method="post">
    <div class="message-controls__container with-menu is-desktop">
            <textarea class="message-controls__text-input" name="txtNewMessage" rows="1" placeholder="Escreva sua mensagem" autofocus="" style="overflow: hidden; word-wrap: break-word; height: 36px;" required></textarea>
    </div>
        <div class="message-controls__controls-wrapper u--clearfix with-menu is-desktop">
            <button class="ch-btn message-controls__action-primary u--pull-left btn-controls-full" type="submit" data-js="submit-form" >
                    Enviar
            </button>
        </div>
        <input name="enviotxtNewMessage" type="hidden" id="enviotxtNewMessage" value="s" />
</form>
</div>
</div>

</div>
</div>
</article>
</div>
</div>
          
<?php
}
?>




        </div>			
        <?php }else{?>
        <h2>Nenhum chat disponível.</h2>
<?php }?>
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
<script src="js/pbox.js"></script>
</body>
</html>