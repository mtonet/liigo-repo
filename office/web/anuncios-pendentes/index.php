<?php
session_start();
//conn
require"../../../conn/exe.php";
//session
require"../../includes-acoes/session/session2.php";
//anuncios pendentes
require"../../includes-acoes/anuncios-pendentes/anuncios-pendentes.php";
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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="icon" href="../../images/favicon.ico" type="image/ico" />

    <title>Liigo | Anúncios Pendentes</title>

    <!-- Bootstrap -->
    <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- NProgress -->
    <link href="../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
    
    <!--Mobile -->
    <style>
      @media screen and (max-width: 620px) {
  .email {display: none;}
}
      </style>
    
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
                <h3>Anúncios Pendentes </h3>
              </div>

              <div class="title_right">
                <form id="formp" name="formp" method="post" action="">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pesquisar..." name="pesq" id="pesq" value="<?php echo $pesq?>">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">ok</button>
                      <input name="enviopesq" type="hidden" id="enviopesq" value="s" />
                    </span>
                  </div>
                </div>
                </form>
              </div>

            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Visualização</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <?php
                  if($row!=""){
                  ?>

                   
                    <table class="table table-striped projects">
                      <thead>
                        <tr>                          
                          <th>Título</th>
                          <th>Edição</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php while($lineanunc=$query->fetch_array()){?>
                        <tr>
                          <td>
                            <a><?php echo $lineanunc['titulo']?></a>
                          </td>                          
                          <td>
                            <a href="anuncio-detalhe.php?area=<?php echo $lineanunc['id_cod']?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Ver</a>
                            <a href="#" class="btn btn-success btn-xs" data-toggle="modal" data-target=".aprovar<?php echo $lineanunc['id_cod']?>"> Aprovar </a>
                            <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target=".deletar<?php echo $lineanunc['id_cod']?>"><i class="fa fa-trash-o"></i> Deletar </a>

                    <div class="modal fade deletar<?php echo $lineanunc['id_cod']?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Deletar registro</h4>
                        </div>
                        <div class="modal-body">
                          <p>Deseja realmente excluir o anúncio <b><?php echo $lineanunc['titulo']?></b>?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          <a href="?area=<?php echo $lineanunc['id_cod']?>&action=delete" class="btn btn-danger">Excluir</a>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="modal fade aprovar<?php echo $lineanunc['id_cod']?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Aprovar registro</h4>
                        </div>
                        <div class="modal-body">
                          <p>Deseja realmente aprovar o anúncio <b><?php echo $lineanunc['titulo']?></b>?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          <a href="?area=<?php echo $lineanunc['id_cod']?>&action=aprovar" class="btn btn-success">Aprovar</a>
                        </div>
                      </div>
                    </div>
                  </div>


                          </td>                          
                        </tr>
                        <?php }?>
                      </tbody>
                    </table>
                   
                   <?php
                    }else{
                      ?>

                      <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 100%; text-align: center;">Nenhum resultado disponível</th>
                        </tr>
                      </thead>
                    </table>

                       <?php
                        }
                        ?>

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
   
    
    <!-- Custom Theme Scripts -->
    <script src="../../build/js/custom.min.js"></script>
  </body>
</html>