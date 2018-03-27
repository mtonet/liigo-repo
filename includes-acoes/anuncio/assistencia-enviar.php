<?php
//assistencia

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='3' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//
$idcat="c614d0c0bb7cb5993004d956564b1687";
$cat="Assistência Técnica";
//$marca=$mysqli->real_escape_string(strip_tags(trim($_POST['marca'])));
//$tecnologia=$mysqli->real_escape_string(strip_tags(trim($_POST['tecnologia'])));
$titulo=$mysqli->real_escape_string(strip_tags(trim($_POST['titulo'])));
$descricao=$mysqli->real_escape_string(strip_tags(trim($_POST['descricao'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

//objtos file
$arquivo01_nome=$_FILES['image']['name'];     
$arquivo01_temporario=$_FILES['image']['tmp_name'];

//marca
$marcas=$_POST['marca'];
$acrescimo=count($marcas);
for ($i=0; $i<$acrescimo; $i++) {
$listamarc2="SELECT id_cod,nome from tbl_marca WHERE id_cod='".$marcas[$i]."'";
$querymarc2=$mysqli->query($listamarc2);
$linemarc2=$querymarc2->fetch_array();
$valoresmarcas.=$linemarc2['id_cod'].",";
$valoresmarcas2.=$linemarc2['nome'].",";
}
$valoresmarcas=substr($valoresmarcas, 0, -1);
$valoresmarcas2=substr($valoresmarcas2, 0, -1);

//tecnologia (tbl_subcategoria assistencia)
$tecnologias=$_POST['tecnologia'];
$acrescimo2=count($tecnologias);
for ($i2=0; $i2<$acrescimo2; $i2++) {
$listatec2="SELECT id_cod,nome from tbl_subcategoria WHERE id_cod='".$tecnologias[$i2]."'";
$querytec2=$mysqli->query($listatec2);
$linetec2=$querytec2->fetch_array();
$valorestecnologias.=$linetec2['id_cod'].",";
$valorestecnologias2.=$linetec2['nome'].",";
}
$valorestecnologias=substr($valorestecnologias, 0, -1);
$valorestecnologias2=substr($valorestecnologias2, 0, -1);

//dados usuario
$listauser="SELECT id,nome,id_cod,estado,cidade from tbl_usuarios WHERE id='".$dadosla['id']."'";
$queryuser=$mysqli->query($listauser);
$lineuser=$queryuser->fetch_array();

//cadastrar
if($enviocad=="s" AND $arquivo01_nome==""){

$cod=rand("1","1234567890");
$cadast="INSERT into tbl_anuncio (id_cod,id_user,user,estado,cidade,titulo,id_categoria,categoria,id_subcategoria,subcategoria,id_marca,marca,id_tecnologia,tecnologia,descricao,status) values ('".md5($cod)."','".$lineuser['id_cod']."','".$lineuser['nome']."','".$lineuser['estado']."','".$lineuser['cidade']."','".$titulo."','".$idcat."','".$cat."','".$valorestecnologias."','".$valorestecnologias2."','".$valoresmarcas."','".$valoresmarcas2."','".$valorestecnologias."','".$valorestecnologias2."','".$descricao."','0')";
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
$cadast="INSERT into tbl_anuncio (id_cod,id_user,user,estado,cidade,titulo,id_categoria,categoria,id_subcategoria,subcategoria,id_marca,marca,id_tecnologia,tecnologia,descricao,avatar,image,status) values ('".md5($cod)."','".$lineuser['id_cod']."','".$lineuser['nome']."','".$lineuser['estado']."','".$lineuser['cidade']."','".$titulo."','".$idcat."','".$cat."','".$valorestecnologias."','".$valorestecnologias2."','".$valoresmarcas."','".$valoresmarcas2."','".$valorestecnologias."','".$valorestecnologias2."','".$descricao."','".$avatar."','".$avatar2."','0')";
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