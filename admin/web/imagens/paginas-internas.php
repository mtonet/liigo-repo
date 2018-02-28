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
                <h3>Imagens portal </h3>
              </div>

              

            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Páginas internas</h2>
                    
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="far fa-plus-square fa-2x"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="../imagens/cadastrar-paginas-internas.php"><h6>Cadastrar</h6></a>
                          </li>
                        </ul>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 20%">Imagem</th>
                          <th style="width: 20%">Página</th>
                          <th>Status</th>
                          <th style="width: 20%">Edição</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>
                            <a><img src="../../images/media.jpg" width="90" height="70"></a>
                          </td>

                          <td>
                            Equipamentos
                          </td>
                          
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Ativo</button>
                          </td>
                          <td>
                            <a href="../imagens/editar-paginas-internas.php" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Deletar </a>
                          </td>
                        </tr>

                        <tr>
                        	<td>
                            <a><img src="../../images/media.jpg" width="90" height="70"></a>
                          </td>

                          <td>
                            Transportadoras   
                          </td>
                          
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Ativo</button>
                          </td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Deletar </a>
                          </td>
                        </tr>

                        <tr>
                        	<td>
                            <a><img src="../../images/media.jpg" width="90" height="70"></a>
                          </td>

                          <td>
                            Assistência Técnica
                          </td>
                          
                          <td>
                            <button type="button" class="btn btn-danger btn-xs">Inativo</button>
                          </td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Deletar </a>
                          </td>
                        </tr>


                       

                      </tbody>
                    </table>
                    <!-- end project list -->

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