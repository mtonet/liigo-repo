<?php
//conn
require"../conn/exe.php";
//login
require"includes-acoes/login/login.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Liigo | Painel do Administrador </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" method="post" id="formlogin" name="formlogin">
              <h1>Administrador</h1>
              <div>
                <input type="text" class="form-control" placeholder="Login" required name="login" id="login" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Senha" required name="passw" id="passw" />
              </div>
              <div>

                <?php if($logaenvio=="s"){
                  echo $msgla;
                }
                ?>

                <button type="submit" class="btn btn-success">Entrar</button>
                <input name="logaenvio" type="hidden" id="logaenvio" value="s" />
              </div>

              <div class="clearfix"></div>

              
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>