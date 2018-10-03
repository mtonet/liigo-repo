<?php
session_start();
//conn
require"conn/exe.php";
//regras
require"includes-acoes/regras/regras.php";
//session
require"includes-acoes/session/session.php";
//anuncio
require"includes-acoes/anuncio/assistencia.php";
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

    
    <form class="multi-page-form" method="post" name="anuncioassist" id="anuncioassist" action="anuncio-assistencia-enviado" enctype="multipart/form-data">

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
              <p>Preencha as informações para criar seu anúncio.</p>
            </td>
          </tr>
        </table>

                
            <div class="form-block">
              <label>Título*</label>
              <input class="border required" type="text" name="titulo" />
            </div>

              <div class="row">
               <div class="col-lg-6 col-md-6">
                <div class="form-block border">
                  <label>Tipo de equipamento*</label>
                  <select name="tecnologia[]" class="border required" data-placeholder="Selecione..." multiple="">
                    <?php while($linetec=$querytec->fetch_array()){?>
                    <option value="<?php echo $linetec['id_cod']?>"><?php echo $linetec['nome']?></option>
                    <?php }?>
                  </select></div>
          </div>
                 
                 <div class="col-lg-6 col-md-6">                
                  
                     <div class="form-block border">
                         <label>Marcas* </label>
                   <select name="marca[]" class="border required" data-placeholder="Selecione..." multiple="">
                    <?php while($linemarc=$querymarc->fetch_array()){?>
                    <option value="<?php echo $linemarc['id_cod']?>"><?php echo $linemarc['nome']?></option>
                    <?php }?>
                  </select></div>

          </div>
                 <div class="col-lg-6 col-md-6"> 
                  <p></p>
                  </div>
                    
                    </div> <!--  FIM ROW -->
                 
                  

           <div class="form-block">
              <label>Descrição*</label> 
              <p>Abaixo faça uma descrição detalhada de todos serviços de assistência que sua empresa realiza. <br>
Não se esqueça de citar as regiões onde presta serviço.</p>           
              <textarea class="border required" name="descricao"></textarea>
            </div>

            <span class="button button-icon small right form-next"><i class="fa fa-angle-right"></i> Próximo</span>
            <div class="clear"></div>

      </div><!-- end basic info -->

      <div class="multi-page-form-content">

        <span class="button button-icon small right form-next" onclick="javascript:anuncioassist.submit()"><i class="fa fa-angle-right"></i> Enviar</span>
        <span class="button button-icon small right form-prev"><i class="fa fa-angle-left"></i> Anterior</span>

        <table class="property-submit-title">
          <tr>
            <td><span class="property-submit-num">2</span></td>
            <td>
              <h4>Imagens</h4>
              <p>Informe imagens para seu anúncio.</p>
            </td>
          </tr>
        </table>

        <div class="form-block">
          <label>Imagem principal</label>
          <input type="file" name="image" id="upload" accept="image/png, image/jpeg"/>
          (<i>limite 2mb</i>)
        </div>
        <br/>

        <div class="form-block gallery">
          <label>Galeria de imagens</label>
          <div class="additional-img-container">
                <table>
                    <tr>
                    <td>
                    <div class="media-uploader-additional-img">
                    <input type="file" class="additional_img" name="additional_img[]" value="" id="uploadm" accept="image/png, image/jpeg"/>
                    (<i>limite 2mb</i>)
                    <span class="delete-additional-img right"><i class="fa fa-trash"></i> Deletar</span>
                    </div>
                    </td>
                    </tr>
                </table>
            </div>
            <span class="button small add-additional-img">Adicionar mais uma imagem</span>
        </div>

        <span class="button button-icon small right form-next" onclick="javascript:anuncioassist.submit()"><i class="fa fa-angle-right"></i> Enviar</span>
        <span class="button button-icon small right form-prev"><i class="fa fa-angle-left"></i> Anterior</span>
        <div class="clear"></div>
      </div><!-- end property images -->

<input name="enviocad" type="hidden" id="enviocad" value="s" />
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
<script src="js/pbox.js"></script>
<script type="text/javascript">
  $(document).ready(function()
{

  var upload = document.getElementById("upload");
upload.addEventListener("change", function(e) {
    var size = upload.files[0].size;
    if(size < 2097152) { //2MB         
      //alert('Permitido'); //Abaixo do permitido
    } else {           
      alert('Permitido imagem até 2mb'); //Acima do limite
      upload.value = ""; //Limpa o campo          
    }
    e.preventDefault();
});

var uploadm = document.getElementById("uploadm");
uploadm.addEventListener("change", function(e) {
    var sizem = uploadm.files[0].size;
    if(sizem < 2097152) { //2MB         
      //alert('Permitido'); //Abaixo do permitido
    } else {           
      alert('Permitido imagem até 2mb'); //Acima do limite
      uploadm.value = ""; //Limpa o campo          
    }
    e.preventDefault();
});

});
</script>
</body>
</html>