<?php
//favoritos

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='19' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//perfil
$listadpu="SELECT id_cod,nome,email,pass,avatar,id_cod FROM tbl_usuarios WHERE email='".$dadosla['email']."' AND pass='".$dadosla['pass']."'";
$querydpu=$mysqli->query($listadpu);
$linedpu=$querydpu->fetch_array();

//lista fav
$listafav="SELECT * FROM tbl_favoritos WHERE id_user='".$linedpu['id_cod']."' ORDER BY id desc";
$queryfav=$mysqli->query($listafav);
$numfav=$queryfav->num_rows;

//deletar anuncio
if($action=="delete"){
$sqld2="DELETE FROM tbl_favoritos WHERE id_cod='".$area."' AND id_user='".$linedpu['id_cod']."'";
$queryd2=$mysqli->query($sqld2);

//direciona
header("Location: favoritos");
}

?>