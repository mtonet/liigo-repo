<?php
//servicos


//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='6' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//
$idcat="318b9cddcea5ebcb2c1171fe1cf277db";
$cat="Serviços";
$servico=$mysqli->real_escape_string(strip_tags(trim($_POST['servico'])));
$titulo=$mysqli->real_escape_string(strip_tags(trim($_POST['titulo'])));
$preco=$mysqli->real_escape_string(strip_tags(trim($_POST['preco'])));
$descricao=$mysqli->real_escape_string(strip_tags(trim($_POST['descricao'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

//objtos file
$arquivo01_nome=$_FILES['image']['name'];     
$arquivo01_temporario=$_FILES['image']['tmp_name'];

//servicos
$listaserv2="SELECT id_cod,nome from tbl_subcategoria WHERE id_cod='".$servico."'";
$queryserv2=$mysqli->query($listaserv2);
$lineserv2=$queryserv2->fetch_array();

//dados usuario
$listauser="SELECT id,nome,id_cod,estado,cidade from tbl_usuarios WHERE id='".$dadosla['id']."'";
$queryuser=$mysqli->query($listauser);
$lineuser=$queryuser->fetch_array();

//cadastrar
if($enviocad=="s" AND $arquivo01_nome==""){

$cod=rand("1","1234567890");
$cadast="INSERT into tbl_anuncio (id_cod,id_user,user,estado,cidade,titulo,preco,id_categoria,categoria,id_subcategoria,subcategoria,descricao,status) values ('".md5($cod)."','".$lineuser['id_cod']."','".$lineuser['nome']."','".$lineuser['estado']."','".$lineuser['cidade']."','".$titulo."','".$preco."','".$idcat."','".$cat."','".$lineserv2['id_cod']."','".$lineserv2['nome']."','".$descricao."','0')";
$query=$mysqli->query($cadast);

//galeria
$operacoes=$_FILES['additional_img']['name'];
$operacoes2=$_FILES['additional_img']['tmp_name'];
if(!empty($_FILES['additional_img']['name'][0])){
$ii=0;
foreach($operacoes as $operacao) {
foreach($operacoes2 as $operacao2) {	
$ii++;
require"img2.php";
$codimg=rand("1","1234567890");
//cadastra imagens
$cadastimg="INSERT into tbl_anuncio_galeria (id_cod,id_anuncio,avatar,image) values ('".md5($codimg)."','".md5($cod)."','".$avatar3."','".$avatar4."')";
$queryimg=$mysqli->query($cadastimg);
}
break;
}
}

}elseif($enviocad=="s" AND $arquivo01_nome!=""){

//img
require"img.php";
$cod=rand("1","1234567890");
$cadast="INSERT into tbl_anuncio (id_cod,id_user,user,estado,cidade,titulo,preco,id_categoria,categoria,id_subcategoria,subcategoria,descricao,avatar,image,status) values ('".md5($cod)."','".$lineuser['id_cod']."','".$lineuser['nome']."','".$lineuser['estado']."','".$lineuser['cidade']."','".$titulo."','".$preco."','".$idcat."','".$cat."','".$lineserv2['id_cod']."','".$lineserv2['nome']."','".$descricao."','".$avatar."','".$avatar2."','0')";
$query=$mysqli->query($cadast);

//galeria
$operacoes=$_FILES['additional_img']['name'];
$operacoes2=$_FILES['additional_img']['tmp_name'];
if(!empty($_FILES['additional_img']['name'][0])){
$ii=0;
foreach($operacoes as $operacao) {
foreach($operacoes2 as $operacao2) {	
$ii++;
require"img2.php";
$codimg=rand("1","1234567890");
//cadastra imagens
$cadastimg="INSERT into tbl_anuncio_galeria (id_cod,id_anuncio,avatar,image) values ('".md5($codimg)."','".md5($cod)."','".$avatar3."','".$avatar4."')";
$queryimg=$mysqli->query($cadastimg);

}
break;
}
}

}
?>