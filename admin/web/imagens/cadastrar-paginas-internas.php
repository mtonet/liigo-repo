<?php
session_start();
//conn
require"../../../conn/exe.php";
//session
require"../../includes-acoes/session/session2.php";
//regras
require"../../includes-acoes/regras/regras.php";
//pagina internas
require"../../includes-acoes/imagens/cadastrar-paginas.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="icon" href="../../images/favicon.ico" type="image/ico" />
	  
    <title>Liigo | Painel do Administrador </title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
   
    

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <!-- top navigation -->
        <?php require"../../includes/menu/menu2.php";?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Imagens portal</h3>
              </div>

              

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Páginas internas <small>/ Cadastrar</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="" method="post" enctype="multipart/form-data">

                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Imagem <span class="required">*</span>
                          
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="imagem" id="imagem" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Página <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <select class="form-control" id="pagina" name="pagina" required>
                            <option value="">selecione</option>

                            <?php while($linecc=$querycc->fetch_array()){?>
                            <option value="<?php echo $linecc['id_cod']?>"><?php echo $linecc['nome']?></option>
                            <?php }?>
                            <option value="1">Cadastre-se</option>
                            <option value="2">Anuncie</option>
                            <option value="3">Anúncio assistência</option>
                            <option value="4">Detalhe Anúncio</option>
                            <option value="5">Anúncio equipamento</option>
                            <option value="6">Anúncio serviço</option>
                            <option value="7">Anúncio suprimento</option>
                            <option value="8">Anúncio transportadora</option>
                            <option value="9">Chat</option>
                            <option value="10">Envio anúncio</option>
                            <option value="11">Lista assistência</option>
                            <option value="12">Lista anúncios</option>
                            <option value="13">Lista equipamento</option>
                            <option value="14">Lista suprimento</option>
                            <option value="15">Lista transportadora</option>
                            <option value="16">Lista login</option>
                            <option value="17">Resultado busca</option>
                            <option value="18">Esqueci senha</option>
                            <option value="19">Favoritos</option>
                            <option value="20">Meus anúncios</option>
                            <option value="21">Meu perfil</option>
                            <option value="22">Login</option>
                            <option value="23">Senha</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <div class="radio">
                            <label>
                              <input type="radio" class="flat" name="status" value="1"> Ativo
                            </label>
                          </div>


                          <div class="radio">
                            <label>
                              <input type="radio" class="flat" name="status" value="0"> Inativo
                            </label>
                          </div>

                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                          <?php if($enviocad=="s"){
                            echo $msgs;
                          }
                            ?>

                          <button type="submit" class="btn btn-success">Cadastrar</button>
                          <input name="enviocad" type="hidden" id="enviocad" value="s" />
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php require"../../includes/rodape/rodape.php";?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../vendors/nprogress/nprogress.js"></script>
    
    <!-- iCheck -->
    <script src="../../vendors/iCheck/icheck.min.js"></script>
   
    <!-- Autosize -->
    <script src="../../vendors/autosize/dist/autosize.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
	
  </body>
</html>
