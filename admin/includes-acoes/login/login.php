<?php
//login
$logina=$mysqli->real_escape_string(strip_tags(trim($_POST['login'])));
$passina=$mysqli->real_escape_string(strip_tags(trim($_POST['passw'])));
$logaenvio=$mysqli->real_escape_string(strip_tags(trim($_POST['logaenvio'])));
if($logina==""){
$msgla='<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Login ou senha com erro. Tente novamente.
              </div>';
}elseif($passina==""){
$msgla='<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Login ou senha com erro. Tente novamente.
              </div>';
}elseif($logaenvio=="s"){
$consultala="SELECT login,senha,status from tbl_admin where login='".$logina."' and senha='".md5($passina)."' and status='1'";
$queryla = $mysqli->query($consultala);
//$dadosla = $queryla->fetch_array();
$linhala = $queryla->num_rows;
if($linhala==0){
$msgla='<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Login ou senha com erro. Tente novamente.
              </div>';
}else{
session_start();
$_SESSION['logadaco_admin_liigo_526']=$logina;
$_SESSION['passadaco_admin_liigo_986']=$passina;
$msgla='<div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Acesso correto, em alguns segundos você será direcionado...
                </div>';
//direciona
echo '<meta http-equiv="refresh" content="3;URL=web/home.php" />';
}
}
?>