<?php
//equipamentos


//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='5' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//
$idcat="4633a7bd213e1971059c2ce5b76c7e0e";
$cat="Equipamentos";
$marca=$mysqli->real_escape_string(strip_tags(trim($_POST['marca'])));
$cabeca=$mysqli->real_escape_string(strip_tags(trim($_POST['cabeca'])));
$tecnologia=$mysqli->real_escape_string(strip_tags(trim($_POST['tecnologia'])));
$condicao=$mysqli->real_escape_string(strip_tags(trim($_POST['condicao'])));
$titulo=$mysqli->real_escape_string(strip_tags(trim($_POST['titulo'])));
$preco=$mysqli->real_escape_string(strip_tags(trim($_POST['preco'])));
$descricao=$mysqli->real_escape_string(strip_tags(trim($_POST['descricao'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

//objtos file
$arquivo01_nome=$_FILES['image']['name'];     
$arquivo01_temporario=$_FILES['image']['tmp_name'];

//marca
$listamarc2="SELECT id_cod,nome from tbl_marca WHERE id_cod='".$marca."'";
$querymarc2=$mysqli->query($listamarc2);
$linemarc2=$querymarc2->fetch_array();

//cabeça impressao
$listacab2="SELECT id_cod,nome from tbl_cabeca_impressao WHERE id_cod='".$cabeca."'";
$querycab2=$mysqli->query($listacab2);
$linecab2=$querycab2->fetch_array();

//tecnologia(subcategoria)
$listatec2="SELECT id_cod,nome from tbl_subcategoria WHERE id_cod='".$tecnologia."'";
$querytec2=$mysqli->query($listatec2);
$linetec2=$querytec2->fetch_array();

//condicao
$listacond2="SELECT id_cod,nome from tbl_condicao_equipamento WHERE id_cod='".$condicao."'";
$querycond2=$mysqli->query($listacond2);
$linecond2=$querycond2->fetch_array();

//dados usuario
$listauser="SELECT id,nome,id_cod,estado,cidade from tbl_usuarios WHERE id='".$dadosla['id']."'";
$queryuser=$mysqli->query($listauser);
$lineuser=$queryuser->fetch_array();

//cadastrar
if($enviocad=="s" AND $arquivo01_nome==""){

$cod=rand("1","1234567890");
$cadast="INSERT into tbl_anuncio (id_cod,id_user,user,estado,cidade,titulo,preco,id_categoria,categoria,id_subcategoria,subcategoria,id_marca,marca,id_cabeca_impressao,cabeca_impressao,id_condicao,condicao,descricao,status) values ('".md5($cod)."','".$lineuser['id_cod']."','".$lineuser['nome']."','".$lineuser['estado']."','".$lineuser['cidade']."','".$titulo."','".$preco."','".$idcat."','".$cat."','".$linetec2['id_cod']."','".$linetec2['nome']."','".$linemarc2['id_cod']."','".$linemarc2['nome']."','".$linecab2['id_cod']."','".$linecab2['nome']."','".$linecond2['id_cod']."','".$linecond2['nome']."','".$descricao."','0')";
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
$cadast="INSERT into tbl_anuncio (id_cod,id_user,user,estado,cidade,titulo,preco,id_categoria,categoria,id_subcategoria,subcategoria,id_marca,marca,id_cabeca_impressao,cabeca_impressao,id_condicao,condicao,descricao,avatar,image,status) values ('".md5($cod)."','".$lineuser['id_cod']."','".$lineuser['nome']."','".$lineuser['estado']."','".$lineuser['cidade']."','".$titulo."','".$preco."','".$idcat."','".$cat."','".$linetec2['id_cod']."','".$linetec2['nome']."','".$linemarc2['id_cod']."','".$linemarc2['nome']."','".$linecab2['id_cod']."','".$linecab2['nome']."','".$linecond2['id_cod']."','".$linecond2['nome']."','".$descricao."','".$avatar."','".$avatar2."','0')";
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