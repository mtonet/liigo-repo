<?php
//anuncio detalhe

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));

$mensagemtxt=$mysqli->real_escape_string(strip_tags(trim($_POST['mensagemtxt'])));
$enviomsgtxt=$mysqli->real_escape_string(strip_tags(trim($_POST['enviomsgtxt'])));

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='4' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//anuncio
$listaan="SELECT * FROM tbl_anuncio WHERE id_cod='".$area."'";
$queryan=$mysqli->query($listaan);
$linean=$queryan->fetch_array();

//galeria
$lista2="SELECT * FROM tbl_anuncio_galeria WHERE id_anuncio='".$area."'";
$query2=$mysqli->query($lista2);
$linha2=$query2->num_rows;

$lista3="SELECT * FROM tbl_anuncio_galeria WHERE id_anuncio='".$area."'";
$query3=$mysqli->query($lista3);

//dados anunciante
$listauser="SELECT nome,email,celular,id_cod,avatar,facebook,twitter,linkedin from tbl_usuarios WHERE id_cod='".$linean['id_user']."'";
$queryuser=$mysqli->query($listauser);
$lineuser=$queryuser->fetch_array();



//dados usuario
$listauserv="SELECT nome,pass,id_cod from tbl_usuarios WHERE pass='".md5($_SESSION['passadaco_site_liigo_689'])."'";
$queryuserv=$mysqli->query($listauserv);
$lineuserv=$queryuserv->fetch_array();

//verifica se o usuário não é o anunciante
$listausanun="SELECT id_user,id_cod from tbl_anuncio WHERE id_user='".$lineuserv['id_cod']."' AND id_cod='".$area."'";
$queryusanun=$mysqli->query($listausanun);
$linhausanun=$queryusanun->num_rows;

//verifica se já não existe mensagem do usuário e do anuncio
$listaverfchat="SELECT 	id_chat,id_anuncio,id_user from tbl_chat WHERE id_anuncio='".$area."' AND id_user='".$lineuserv['id_cod']."'";
$queryverfchat=$mysqli->query($listaverfchat);
$lineverfchat=$queryverfchat->fetch_array();
$linhaverfchat=$queryverfchat->num_rows;


//pergunta
if($enviomsgtxt=="s" AND $mensagemtxt==""){
$msgtxt='<div class="alert-box error"><i class="fa fa-check icon"></i> Por favor descreva sua pergunta para o anúncio.</div>';
}elseif($linhausanun!=""){
$msgtxt='<div class="alert-box error"><i class="fa fa-check icon"></i> Você não pode enviar pergunta para o seu próprio anúncio.</div>';
}elseif($enviomsgtxt=="s" AND $mensagemtxt!=""){

if($linhaverfchat==""){
//
$cod=rand("1","1234567890");
$cadastperg="INSERT into tbl_chat (id_chat,id_anuncio,anuncio,id_user_anuncio,nome_user_anuncio,id_user,nome_user,data,hora,msg) values ('".md5($cod)."','".$area."','".$linean['titulo']."','".$lineuserv['id_cod']."','".$lineuserv['nome']."','".$linean['id_user']."','".$linean['user']."','".date("Y-m-d")."','".date("H:i")."','".$mensagemtxt."')";
$queryperg=$mysqli->query($cadastperg);

//email anunciante
require"email.php";
//
$msgtxt='<div class="alert-box success"><i class="fa fa-check icon"></i> Pergunta enviada com sucesso.</div>';

}else{
$cadastperg="INSERT into tbl_chat (id_chat,id_anuncio,anuncio,id_user_anuncio,nome_user_anuncio,id_user,nome_user,data,hora,msg) values ('".$lineverfchat['id_chat']."','".$area."','".$linean['titulo']."','".$lineuserv['id_cod']."','".$lineuserv['nome']."','".$linean['id_user']."','".$linean['user']."','".date("Y-m-d")."','".date("H:i")."','".$mensagemtxt."')";
$queryperg=$mysqli->query($cadastperg);
//email anunciante
require"email.php";
//
$msgtxt='<div class="alert-box success"><i class="fa fa-check icon"></i> Pergunta enviada com sucesso.</div>';
}

}
?>