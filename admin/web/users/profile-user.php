<?php
session_start();
//conn
require"../../../conn/exe.php";
//session
require"../../includes-acoes/session/session2.php";
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
                <h3>Perfil do Usuário</h3>
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
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="../../images/picture.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>Ana Silva</h3>

                      <ul class="list-unstyled user_data">                        
                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> ana@gmail.com
                        </li>

                        <li class="m-top-xs">
                          <i class="fa  fa-mobile user-profile-icon"></i> 19 99871 8900
                        </li>
                        
                        <li class="m-top-xs">
                          <i class="fa fa-phone user-profile-icon"></i> 19 3739 3258
                        </li>                                                
                       
                       <hr>
                        <h4>CPF/ CNPJ</h4>
                        <li class="m-top-xs">
                          <i class="fa fa-file user-profile-icon"></i> 34.268.715/0001-31
                        </li>
                        
                        <hr>
                        
                        <h4>Localização</h4>
                        
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Rua Jose Martins, 34
                        </li>
                        <li><i class="user-profile-icon"></i> Apto 211- Bloco 2
                        </li>

                        <li><i class="fa fa-map-marker user-profile-icon"></i> Campinas, SP
                        </li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i> 06764-040
                        </li>
                      </ul>
                                         
                        <hr>
                                         
                                         <div class="text-left mtop20">                            
                            <a href="#" class="btn btn-xl btn-danger">Deletar</a>
                          </div>
                                          
                          <hr>                
                                           

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="row">
                        <div class="col-md-6">
                          <h2>Lista de Favoritos</h2>
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
                            <a href="../../../anuncio-detalhe.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>                            
                            
                                    </td>                        
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Impressora Mimaki Bs160</td>
                                  <td><span class="label label-danger">inativo</span></td>
                                  <td class="hidden-phone"></td>
                                  <td class="vertical-align-mid">
                                   <a href="../../../anuncio-detalhe.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>                            
                            
                                  </td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Impressora Mimaki Jv5 P/ Impressão Base D'água - Completa</td>
                                  <td><span class="label label-success">ativo</span></td>
                                  <td class="hidden-phone"></td>
                                  <td class="vertical-align-mid">
                                    <a href="../../../anuncio-detalhe.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>                            
                           
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