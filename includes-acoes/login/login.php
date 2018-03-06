<?php
//login

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='22' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

$emailna=$mysqli->real_escape_string(strip_tags(trim($_POST['email'])));
$passna=$mysqli->real_escape_string(strip_tags(trim($_POST['pass'])));
$enviolog=$mysqli->real_escape_string(strip_tags(trim($_POST['enviolog'])));
if($emailna==""){
$msgslog='<div class="alert-box error"><i class="fa fa-close icon"></i> Email ou senha com erro. Tente novamente.</div>';
}elseif($passna==""){
$msgslog='<div class="alert-box error"><i class="fa fa-close icon"></i> Email ou senha com erro. Tente novamente.</div>';
}elseif($enviolog=="s"){
$consultala="SELECT email,pass from tbl_usuarios where email='".$emailna."' and pass='".md5($passna)."'";
$queryla = $mysqli->query($consultala);
//$dadosla = $queryla->fetch_array();
$linhala = $queryla->num_rows;
if($linhala==0){
$msgslog='<div class="alert-box error"><i class="fa fa-close icon"></i> Email ou senha com erro. Tente novamente.</div>';
}else{
session_start();
$_SESSION['logadaco_site_liigo_265']=$emailna;
$_SESSION['passadaco_site_liigo_689']=$passna;
$msgslog='<div class="alert-box success"><i class="fa fa-check icon"></i> Acesso correto, em alguns segundos você será direcionado...</div>';
//direciona
//echo '<meta http-equiv="refresh" content="3;URL=meu-perfil" />';
header("Refresh:3; url=meu-perfil");
}
}
?>