<?php
//chat

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$anuncio=$mysqli->real_escape_string(strip_tags(trim($_GET['anuncio'])));
$txtNewMessage=$mysqli->real_escape_string(strip_tags(trim($_POST['txtNewMessage'])));
$enviotxtNewMessage=$mysqli->real_escape_string(strip_tags(trim($_POST['enviotxtNewMessage'])));




//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='9' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//perfil
$listadpu="SELECT nome,email,pass,avatar,id_cod FROM tbl_usuarios WHERE email='".$dadosla['email']."' AND pass='".$dadosla['pass']."'";
$querydpu=$mysqli->query($listadpu);
$linedpu=$querydpu->fetch_array();

//chat criados
$listachat="SELECT * FROM tbl_chat WHERE id_user_anuncio='".$dadosla['id_cod']."' OR id_user='".$dadosla['id_cod']."' GROUP BY id_chat ORDER BY MAX(data_at) DESC";
$querychat=$mysqli->query($listachat);
$numchat=$querychat->num_rows;


if($enviotxtNewMessage=="s"){
//dados usuario
$listauserv="SELECT nome,pass,id_cod from tbl_usuarios WHERE pass='".$dadosla['pass']."'";
$queryuserv=$mysqli->query($listauserv);
$lineuserv=$queryuserv->fetch_array();

//anuncio
$listaan="SELECT id_cod,titulo,id_user,user FROM tbl_anuncio WHERE id_cod='".$anuncio."'";
$queryan=$mysqli->query($listaan);
$linean=$queryan->fetch_array();

//pega nome do usuario ao contrario
$listacht="SELECT id_chat,id_user_anuncio,nome_user_anuncio,id_user,nome_user,data_at FROM tbl_chat WHERE id_chat='".$area."' ORDER BY data_at DESC LIMIT 1";
$querycht=$mysqli->query($listacht);
$linecht=$querycht->fetch_array();

//condicoes
if($linecht['id_user_anuncio']==$dadosla['id_cod']){
$iduser1=$dadosla['id_cod'];
$user1=$dadosla['nome'];
$iduser2=$linecht['id_user'];
$user2=$linecht['nome_user'];

}elseif($linecht['id_user_anuncio']!=$dadosla['id_cod']){
$iduser1=$dadosla['id_cod'];
$user1=$dadosla['nome'];
$iduser2=$linecht['id_user_anuncio'];
$user2=$linecht['nome_user_anuncio'];
}

//cadastra mensagem
$cadastperg="INSERT into tbl_chat (id_chat,id_anuncio,anuncio,id_user_anuncio,nome_user_anuncio,id_user,nome_user,data,hora,msg) values ('".$area."','".$linean['id_cod']."','".$linean['titulo']."','".$iduser1."','".$user1."','".$iduser2."','".$user2."','".date("Y-m-d")."','".date("H:i")."','".$txtNewMessage."')";
$queryperg=$mysqli->query($cadastperg);

//email anunciante
$listamail="SELECT nome,email,id_cod FROM tbl_usuarios WHERE id_cod='".$iduser2."'";
$querymail=$mysqli->query($listamail);
$linemail=$querymail->fetch_array();
require"email.php";
//
header("Location: chat");
}
?>