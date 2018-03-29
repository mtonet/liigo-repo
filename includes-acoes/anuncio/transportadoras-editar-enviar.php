<?php
//transportadoras editar


//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='8' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//
$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$idcat="70f7e11763a006e605ec81c4a4858b10";
$cat="Transportadoras";
$transporte=$mysqli->real_escape_string(strip_tags(trim($_POST['transporte'])));
$titulo=$mysqli->real_escape_string(strip_tags(trim($_POST['titulo'])));
$descricao=$mysqli->real_escape_string(strip_tags(trim($_POST['descricao'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

//objtos file
$arquivo01_nome=$_FILES['image']['name'];     
$arquivo01_temporario=$_FILES['image']['tmp_name'];

//transporte
$listatrans2="SELECT id_cod,nome from tbl_subcategoria WHERE id_cod='".$transporte."'";
$querytrans2=$mysqli->query($listatrans2);
$linetrans2=$querytrans2->fetch_array();

//dados usuario
$listauser="SELECT id,nome,id_cod,estado,cidade from tbl_usuarios WHERE id='".$dadosla['id']."'";
$queryuser=$mysqli->query($listauser);
$lineuser=$queryuser->fetch_array();

//cadastrar
if($enviocad=="s" AND $arquivo01_nome==""){

$cod=rand("1","1234567890");
$cadast="UPDATE tbl_anuncio SET estado='".$lineuser['estado']."',cidade='".$lineuser['cidade']."',titulo='".$titulo."',id_categoria='".$idcat."',categoria='".$cat."',id_subcategoria='".$linetrans2['id_cod']."',subcategoria='".$linetrans2['nome']."',descricao='".$descricao."',status='0' WHERE id_cod='".$area."' AND id_user='".$lineuser['id_cod']."'";
$query=$mysqli->query($cadast);

//galeria
$operacoes=$_FILES['additional_img']['name'];
$operacoes2=$_FILES['additional_img']['tmp_name'];
if(!empty($_FILES['additional_img']['name'][0])){
$_SESSION['images']='ativo';//sessão para imagem
$ii=0;
foreach($operacoes as $operacao) {
foreach($operacoes2 as $operacao2) {	
$ii++;
require"img2.php";
$codimg=rand("1","1234567890");
//cadastra imagens
$cadastimg="INSERT into tbl_anuncio_galeria (id_cod,id_anuncio,avatar,image) values ('".md5($codimg)."','".$area."','".$avatar3."','".$avatar4."')";
$queryimg=$mysqli->query($cadastimg);
}
break;
}
}
//direciona
header("Location: editar-anuncio-transportadoras-enviado?area=".$area."");

}elseif($enviocad=="s" AND $arquivo01_nome!=""){

//img
require"img.php";
$cod=rand("1","1234567890");
$cadast="UPDATE tbl_anuncio SET estado='".$lineuser['estado']."',cidade='".$lineuser['cidade']."',titulo='".$titulo."',id_categoria='".$idcat."',categoria='".$cat."',id_subcategoria='".$linetrans2['id_cod']."',subcategoria='".$linetrans2['nome']."',descricao='".$descricao."',status='0',avatar='".$avatar."',image='".$avatar2."' WHERE id_cod='".$area."' AND id_user='".$lineuser['id_cod']."'";
$query=$mysqli->query($cadast);

//galeria
$operacoes=$_FILES['additional_img']['name'];
$operacoes2=$_FILES['additional_img']['tmp_name'];
if(!empty($_FILES['additional_img']['name'][0])){
$_SESSION['images']='ativo';//sessão para imagem
$ii=0;
foreach($operacoes as $operacao) {
foreach($operacoes2 as $operacao2) {	
$ii++;
require"img2.php";
$codimg=rand("1","1234567890");
//cadastra imagens
$cadastimg="INSERT into tbl_anuncio_galeria (id_cod,id_anuncio,avatar,image) values ('".md5($codimg)."','".$area."','".$avatar3."','".$avatar4."')";
$queryimg=$mysqli->query($cadastimg);

}
break;
}
}
$_SESSION['images']='ativo';//sessão para imagem
//direciona
header("Location: editar-anuncio-transportadoras-enviado?area=".$area."");
}
?>