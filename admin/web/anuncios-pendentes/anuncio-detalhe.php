<?php
session_start();
//conn
require"../../../conn/exe.php";
//session
require"../../includes-acoes/session/session2.php";
//anuncios
require"../../includes-acoes/anuncios-pendentes/anuncios-pendentes-detalhes.php";
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <!-- Custom Theme Style -->
    <link href="../../build/css/custom.min.css" rel="stylesheet">
    <link href="../../build/css/custom.css" rel="stylesheet">
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
                <h3>Detalhes do anúncio</h3>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $line['titulo']?></h2>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="col-md-9 col-sm-9 col-xs-12">
     
                    <div class="row">

                      <?php if($line['avatar']!=""){?>
                      <div class="col-md-55">
                        <p>Imagem principal</p>
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="../../../uploads/anuncios/thumb/<?php echo $line['avatar']?>" alt="image">
                            <div class="mask">
                              <div class="tools tools-bottom">
                                <a href="#" data-toggle="modal" data-target=".deletar"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="modal fade deletar" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Deletar imagem principal</h4>
                        </div>
                        <div class="modal-body">
                          <p>Deseja realmente excluir a imagem principal do anúncio <b><?php echo $line['titulo']?></b>?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          <a href="?area=<?php echo $line['id_cod']?>&action=deletep" class="btn btn-danger">Excluir</a>
                        </div>
                      </div>
                    </div>
                  </div>


                      <?php }?>

                    </div>

                    <div class="row">

                      <?php 
                      if($linha2!=""){
                        while($line2=$query2->fetch_array()){
                      ?>

                      <div class="col-md-55">
                        <p>Galeria</p>
                        <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="../../../uploads/anuncios/thumb/<?php echo $line2['avatar']?>" alt="image">
                            <div class="mask">
                              <div class="tools tools-bottom">
                                <a href="#" data-toggle="modal" data-target=".deletar<?php echo $line2['id_cod']?>"><i class="fa fa-times"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="modal fade deletar<?php echo $line2['id_cod']?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Deletar imagem galeria</h4>
                        </div>
                        <div class="modal-body">
                          <p>Deseja realmente excluir a imagem da galeria do anúncio <b><?php echo $line['titulo']?></b>?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          <a href="?area=<?php echo $line['id_cod']?>&area2=<?php echo $line2['id_cod']?>&action=deleteg" class="btn btn-danger">Excluir</a>
                        </div>
                      </div>
                    </div>
                  </div>

                      <?php 
                      }
                    }
                      ?>

                    </div>
                    
                    <hr>
                    
                    <h4>Características</h4>
                    
                    <!-- ****** ROBSON A LISTA ABAIXO DEVE ESTAR RELACIONADA COM CADA CATEGORIA CONFORME OS CAMPOS DE CADASTRO ************-->
                    
                    <hr>
                    
                    <div class="row">                    
                    <ul class="stats-overview">
                        <li>
                          <span class="name"> Categoria </span>
                          <span class="value text-success"> <?php echo $line['categoria']?> </span>
                        </li>

                        <?php if($line['preco']!="0"){?><li>
                          <span class="name"> Preço</span>
                          <span class="value text-success"> R$ <?php echo number_format($line['preco'], 2, ',','.');?> </span>
                        </li><?php }?>

                        <?php if($line['marca']!=""){?><li class="hidden-phone">
                          <span class="name"> Marca </span>
                          <span class="value text-success"> <?php echo $line['marca']?> </span>
                        </li><?php }?>

                        </ul>
                          
                          <ul class="stats-overview">

                           <?php if($line['cabeca_impressao']!=""){?><li>
                          <span class="name"> Cabeça de impressão </span>
                          <span class="value text-success"> <?php echo $line['cabeca_impressao']?> </span>
                        </li><?php }?>

                        <?php if($line['tecnologia']!=""){?><li>
                          <span class="name"> Tecnologia</span>
                          <span class="value text-success"> <?php echo $line['tecnologia']?> </span>
                        </li><?php }?>

                        <?php if($line['condicao']!=""){?><li class="hidden-phone">
                          <span class="name"> Condição do equipamento </span>
                          <span class="value text-success"> <?php echo $line['condicao']?> </span>
                        </li><?php }?>

                      </ul>

                      <ul class="stats-overview">

                           <?php if($line['tipo_suprimento']!=""){?><li>
                          <span class="name"> Tipo de Suprimento </span>
                          <span class="value text-success"> <?php echo $line['tipo_suprimento']?> </span>
                        </li><?php }?>

                        <?php if($line['tipo_servico']!=""){?><li>
                          <span class="name"> Tipo de serviço</span>
                          <span class="value text-success"> <?php echo $line['tipo_servico']?> </span>
                        </li><?php }?>

                        <?php if($line['tipo_transporte']!=""){?><li class="hidden-phone">
                          <span class="name"> Tipo de transporte </span>
                          <span class="value text-success"> <?php echo $line['tipo_transporte']?> </span>
                        </li><?php }?>

                      </ul>
                        
                        
                    
                    </div>
                    
                    </div>

                    <!-- start project-detail sidebar -->
                    <div class="col-md-3 col-sm-3 col-xs-12">

                      <section class="panel">

                        <div class="x_title">
                          <h2>Descrição</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">

                          <p><?php echo $line['descricao']?></p>
                          <br />

                          <div class="project_detail">

                          <div class="text-right mtop20">      

                            <?php if($line['status']=="0"){?><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target=".aprovar">Aprovar anúncio</a><?php }?>





                            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target=".deletaranunc">Deletar anúncio</a>

                          </div>
                        </div>


                        <div class="modal fade aprovar" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Aprovar registro</h4>
                        </div>
                        <div class="modal-body">
                          <p>Deseja realmente aprovar o anúncio <b><?php echo $line['titulo']?></b>?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          <a href="?area=<?php echo $line['id_cod']?>&action=aprovar" class="btn btn-success">Aprovar</a>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="modal fade deletaranunc" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Deletar registro</h4>
                        </div>
                        <div class="modal-body">
                          <p>Deseja realmente excluir o anúncio <b><?php echo $line['titulo']?></b>?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          <a href="?area=<?php echo $line['id_cod']?>&action=delete" class="btn btn-danger">Excluir</a>
                        </div>
                      </div>
                    </div>
                  </div>


                      </section>

                    </div>
                    <!-- end project-detail sidebar -->

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