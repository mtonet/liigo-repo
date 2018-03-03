<?php
session_start();
//conn
require"../../../conn/exe.php";
//session
require"../../includes-acoes/session/session2.php";
//regras
require"../../includes-acoes/regras/regras.php";
//anunciantes
require"../../includes-acoes/anunciantes/dados.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <div class="container body">
      <div class="main_container">

        <!-- top navigation -->
        <?php require"../../includes/menu/menu2.php";?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Perfil do Anunciante</h3>
              </div>            
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">                  
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          
                          <?php
                          if($line['avatar']!=""){
                          ?>
                          <img class="img-responsive avatar-view" src="../../../uploads/usuarios/<?php echo $line['avatar'];?>" alt="Avatar" title="avatar">

                          <?php }else{?>
                          <img class="img-responsive avatar-view" src="../../../uploads/usuarios/no.jpg" alt="Avatar" title="avatar">
                          <?php }?>


                        </div>
                      </div>
                      <h3><?php echo $line['nome']?></h3>

                      <ul class="list-unstyled user_data">                        
                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $line['email']?>
                        </li>

                        <li class="m-top-xs">
                          <i class="fa  fa-mobile user-profile-icon"></i> <?php echo $line['celular']?>
                        </li>
                        
                        <li class="m-top-xs">
                          <i class="fa fa-phone user-profile-icon"></i> <?php echo $line['telefone']?>
                        </li>                                                
                       
                       <hr>
                        <h4>CPF/ CNPJ</h4>
                        <li class="m-top-xs">
                          <i class="fa fa-file user-profile-icon"></i> <?php echo $line['cpf_cnpj']?>
                        </li>
                        
                        <!--<hr>
                        
                        <h4>Localização</h4>
                        
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Rua Jose Martins, 34
                        </li>
                        <li><i class="user-profile-icon"></i> Apto 211- Bloco 2
                        </li>

                        <li><i class="fa fa-map-marker user-profile-icon"></i> Campinas, SP
                        </li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i> 06764-040
                        </li>
                      </ul>-->
                                         
                        <hr>
                                         
                            <div class="text-left mtop20">                            
                            <a href="#" class="btn btn-xl btn-danger" data-toggle="modal" data-target=".deletar<?php echo $line['id_cod']?>">Deletar</a>
                          </div>

                          <div class="modal fade deletar<?php echo $line['id_cod']?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Deletar registro</h4>
                        </div>
                        <div class="modal-body">
                          <p>Deseja realmente excluir o usuário <b><?php echo $line['nome']?></b>?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          <a href="?area=<?php echo $line['id_cod']?>&action=delete" class="btn btn-danger">Excluir</a>
                        </div>

                      </div>
                    </div>
                  </div>
                                          
                          <hr>                
                                           

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="row">
                        <div class="col-md-6">
                          <h2>Lista de Anúncios</h2>
                        </div>
                      </div>                      

                            <table class="data table table-striped no-margin">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Título</th>
                                  <th>Status</th>  
                                  <th></th>                                
                                  <th>View</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Plotter Mimaki Cjv 150 - 107 - Bs Impressão E Corte</td>
                                  <td><span class="label label-success">ativo</span></td>
                                  <td></td>
                                  <td class="vertical-align-mid">                                  
                            <a href="anuncio-detalhe.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>                            
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                    </td>                        
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Impressora Mimaki Bs160</td>
                                  <td><span class="label label-danger">inativo</span></td>
                                  <td class="hidden-phone"></td>
                                  <td class="vertical-align-mid">
                                   <a href="anuncio-detalhe.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>                            
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Impressora Mimaki Jv5 P/ Impressão Base D'água - Completa</td>
                                  <td><span class="label label-success">ativo</span></td>
                                  <td class="hidden-phone"></td>
                                  <td class="vertical-align-mid">
                                    <a href="anuncio-detalhe.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>                            
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                    </div>
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