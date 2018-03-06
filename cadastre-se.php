<?php
session_start();
//conn
require"conn/exe.php";
//regras
require"includes-acoes/regras/regras.php";
//cadastre-se
require"includes-acoes/cadastro/cadastro.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Homely - Responsive Real Estate Template">
  <meta name="author" content="Rype Creative [Chris Gipple]">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liigo | Cadastre-se</title>
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
    <h1>Cadastre-se</h1>
    <div class="breadcrumb right">Home <i class="fa fa-angle-right"></i> <a href="#" class="current">Cadastre-se</a></div>
    <div class="clear"></div>
  </div>
</section>

<section class="module login">
  <div class="container">

    <div class="row">
      <div class="col-lg-4 col-lg-offset-4"> 
        <p>Você já possui uma conta?<strong><a href="login"> Faça o Login aqui.</a></strong></p> 
        <form method="post" class="login-form" id="cadastro" name="cadastro" action="#cad">
          <div class="form-block">
            <label>Nome*</label>
            <input class="border" type="text" name="nome" required value="<?php echo $_SESSION['nome'];?>" />
          </div>
          <div class="form-block">
            <label>Email*</label>
            <input class="border" type="email" name="email" required value="<?php echo $_SESSION['email'];?>"/>
          </div>
          <div>
           <label>Telefone</label>
            <input class="border" type="tel" name="telefone" value="<?php echo $_SESSION['telefone'];?>"/>
          </div>
          <div>
           <label>Celular*</label>
            <input class="border" type="tel" name="celular" required value="<?php echo $_SESSION['celular'];?>"/>
          </div>
          <div>
          <label>CPF/ CNPJ*</label>
            <input class="border" type="text" name="cpf_cnpj" required value="<?php echo $_SESSION['cpf_cnpj'];?>"/>
          </div>
        <div class="form-block border">
                  <label>Estado*</label>
                  <select class="border" style="display: none;" name="estado" id="estado">   
                  <option value="">Selecione o Estado</option>
   <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Rorâima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>            
                  </select>
            </div>
            <div class="form-block border">
                  <label>Cidade*</label>
                  <input class="border" type="text" name="cidade" required value="<?php echo $_SESSION['cidade'];?>"/>               
                  </select>
            </div>
            
          <div class="form-block">
            <label>Senha*</label>
            <input class="border" type="password" name="pass" required/>
          </div>
          <div class="form-block">
            <a id="cad"></a>
            <label>Confirme a senha*</label>
            <input class="border" type="password" name="pass_confirm" required/>
          </div>
          <div class="form-block">
            
            <?php if($enviocad=="s"){
                            echo $msgscad;
                          }
                            ?>

            <button class="button button-icon" type="submit"><i class="fa fa-angle-right"></i>Registrar</button>
            <input name="enviocad" type="hidden" id="enviocad" value="s" />
          </div>
          <div class="divider"></div>
          <p class="note">Clicando em registrarvocê aceita nossos <br><a href="#">Termos and condições</a></p>    
        </form>
      </div>
    </div><!-- end row -->

  </div>
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