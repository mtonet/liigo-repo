<?php
//equipamentos editar

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='5' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//
$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$idcat="4633a7bd213e1971059c2ce5b76c7e0e";
$cat="Equipamentos";
$marca=$mysqli->real_escape_string(strip_tags(trim($_POST['marca'])));
$cabeca=$mysqli->real_escape_string(strip_tags(trim($_POST['cabeca'])));
$tecnologia=$mysqli->real_escape_string(strip_tags(trim($_POST['tecnologia'])));
$condicao=$mysqli->real_escape_string(strip_tags(trim($_POST['condicao'])));
$titulo=$mysqli->real_escape_string(strip_tags(trim($_POST['titulo'])));
$preco=$mysqli->real_escape_string(strip_tags(trim(str_replace(',', '.', str_replace('.', '',$_POST['preco'])))));
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

//tecnologia (tbl_subcategoria)
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
$cadast="UPDATE tbl_anuncio SET estado='".$lineuser['estado']."',cidade='".$lineuser['cidade']."',titulo='".$titulo."',preco='".$preco."',id_categoria='".$idcat."',categoria='".$cat."',id_marca='".$linemarc2['id_cod']."',marca='".$linemarc2['nome']."',id_cabeca_impressao='".$linecab2['id_cod']."',cabeca_impressao='".$linecab2['nome']."',id_subcategoria='".$linetec2['id_cod']."',subcategoria='".$linetec2['nome']."',id_condicao='".$linecond2['id_cod']."',condicao='".$linecond2['nome']."',descricao='".$descricao."',status='0' WHERE id_cod='".$area."' AND id_user='".$lineuser['id_cod']."'";
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
header("Location: editar-anuncio-equipamentos-enviado?area=".$area."");
}elseif($enviocad=="s" AND $arquivo01_nome!=""){

//img
require"img.php";
$cod=rand("1","1234567890");
$cadast="UPDATE tbl_anuncio SET estado='".$lineuser['estado']."',cidade='".$lineuser['cidade']."',titulo='".$titulo."',preco='".$preco."',id_categoria='".$idcat."',categoria='".$cat."',id_marca='".$linemarc2['id_cod']."',marca='".$linemarc2['nome']."',id_cabeca_impressao='".$linecab2['id_cod']."',cabeca_impressao='".$linecab2['nome']."',id_subcategoria='".$linetec2['id_cod']."',subcategoria='".$linetec2['nome']."',id_condicao='".$linecond2['id_cod']."',condicao='".$linecond2['nome']."',descricao='".$descricao."',avatar='".$avatar."',image='".$avatar2."',status='0' WHERE id_cod='".$area."' AND id_user='".$lineuser['id_cod']."'";
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
header("Location: editar-anuncio-equipamentos-enviado?area=".$area."");
}
?>