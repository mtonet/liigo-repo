<?php
session_start();
//conn
require"../../../conn/exe.php";
//session
require"../../includes-acoes/session/session2.php";
//regras
require"../../includes-acoes/regras/regras.php";
//anunciantes
require"../../includes-acoes/anunciantes/lista.php";
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

    <title>Liigo | Anunciantes</title>

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
                <h3>Anunciantes </h3>
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
                          
                          <th>Nome</th>
                          <th class="email">Email</th>
                          <!--<th>Status</th>-->
                          <th >Edição</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                        while($line=$query->fetch_array()){
                        ?>

                        <tr>
                          <td>
                            <a><?php echo $line['nome']?></a>
                          </td>
                          <td class="email">
                            <?php echo $line['email']?>
                          </td>
                          <!--<td><button type="button" class="btn btn-success btn-xs">Ativo</button></td>-->
                          <td>
                            <a href="profile-anunciante.php?area=<?php echo $line['id_cod']?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View</a>
                            <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target=".deletar<?php echo $line['id_cod']?>"><i class="fa fa-trash-o"></i> Deletar </a>


                            <div class="modal fade deletar<?php echo $line['id_cod']?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Deletar registro</h4>
                        </div>
                        <div class="modal-body">
                          <p>Deseja realmente excluir o anunciante <b><?php echo $line['nome']?></b>?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                          <a href="?area=<?php echo $line['id_cod']?>&action=delete" class="btn btn-danger">Excluir</a>
                        </div>

                      </div>
                    </div>
                  </div>


                          </td>                          
                        </tr>

                        

                        <?php
                        }
                        ?>
                       

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