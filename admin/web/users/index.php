<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="icon" href="../../images/favicon.ico" type="image/ico" />

    <title>Liigo | Usuários</title>

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
                <h3>Usuários </h3>
              </div>

              <div class="title_right">
                <form id="formp" name="formp" method="post" action="">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pesquisar...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">ok</button>
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
                    <h2>View</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          
                          <th>Nome</th>
                          <th class="email">Email</th>
                          <th>Celular</th>
                          <th >Edição</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td>
                            <a>Marcelo Ricardo de Araujo Tonet</a>
                          </td>
                          <td class="email">
                            marcelo@maonaweb.com.br
                          </td>
                          <td>11 99871 9700</td>
                          <td>
                            <a href="profile-user.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View</a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Deletar </a>
                          </td>                          
                        </tr>

                        <tr>
                          <td >
                            <a>Robson Cavalcante</a>
                          </td>
                          <td class="email">robson@maonaweb.com.br</td>
                          <td>19 99854 9710</td>
                          <td>
                            <a href="profile-user.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View</a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Deletar </a>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <a>Vitor Marinho</a>
                          </td>
                          <td class="email">vitor@maonaweb.com.br</td>
                          <td>11 99632 8514</td>
                          <td>
                            <a href="profile-user.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View</a>
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