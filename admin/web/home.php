<?php
session_start();
//conn
require"../../conn/exe.php";
//session
require"../includes-acoes/session/session.php";
//regras
require"../includes-acoes/regras/regras.php";
//home
require"../includes-acoes/home/home.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="icon" href="../images/favicon.ico" type="image/ico" />

     <title>Liigo | Painel do Administrador </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">

        <!-- top navigation -->
        <?php require"../includes/menu/menu.php";?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fas fa-file"></i> Total de anuncios</span>
              <div class="count"><?php echo $rowat;?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fas fa-users"></i>  Total de anunciantes</span>
              <div class="count"><?php echo $rowat2;?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="far fa-file"></i>  Anuncios pendentes </span>
              <div class="count red"><?php echo $rowat3;?></div>
            </div>
            
          </div>
          <!-- /top tiles -->


          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Últimos anuncios Pendentes</h2>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">

                    <ul class="list-unstyled timeline widget">
                      <?php
                        while($lineult=$queryult->fetch_array()){
                        ?>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              <a><?php echo $lineult['titulo']?></a>
                                          </h2>
                            <div class="byline">
                              <span><?php echo utf8_encode(tempo_corrido($lineult['data']))?></span> por <a><?php echo $lineult['user']?></a>
                            </div>
                            <p class="excerpt"><?php echo mb_strimwidth($lineult['descricao'], 0, 100, "...")?> <br><a href="anuncios-pendentes/anuncio-detalhe.php?area=<?php echo $lineult['id_cod']?>">visualize</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <?php
                        }
                        ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div> 
              
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php require"../includes/rodape/rodape.php";?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>