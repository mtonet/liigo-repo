<?php
//suprimentos editar


//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='7' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//
$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$idcat="21b2e6efe1400635f92d0320eed420a5";
$cat="Suprimentos";
$tecnologia=$mysqli->real_escape_string(strip_tags(trim($_POST['tecnologia'])));
//$suprimento=$mysqli->real_escape_string(strip_tags(trim($_POST['suprimento'])));
$titulo=$mysqli->real_escape_string(strip_tags(trim($_POST['titulo'])));
$preco=$mysqli->real_escape_string(strip_tags(trim(str_replace(',', '.', str_replace('.', '',$_POST['preco'])))));
$descricao=$mysqli->real_escape_string(strip_tags(trim($_POST['descricao'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

//objtos file
$arquivo01_nome=$_FILES['image']['name'];     
$arquivo01_temporario=$_FILES['image']['tmp_name'];

//tecnologia (tbl_subcategoria equipamentos)
$listatec2="SELECT id_cod,nome from tbl_subcategoria WHERE id_cod='".$tecnologia."'";
$querytec2=$mysqli->query($listatec2);
$linetec2=$querytec2->fetch_array();

//tipo supri
$suprimento=$_POST['suprimento'];
$acrescimo=count($suprimento);
for ($i=0; $i<$acrescimo; $i++) {
$listasupri2="SELECT id_cod,nome from tbl_subcategoria WHERE id_cod='".$suprimento[$i]."'";
$querysupri2=$mysqli->query($listasupri2);
$linesupri2=$querysupri2->fetch_array();
$valoressuprimento.=$linesupri2['id_cod'].",";
$valoressuprimento2.=$linesupri2['nome'].",";
}
$valoressuprimento=substr($valoressuprimento, 0, -1);
$valoressuprimento2=substr($valoressuprimento2, 0, -1);

//dados usuario
$listauser="SELECT id,nome,id_cod,estado,cidade from tbl_usuarios WHERE id='".$dadosla['id']."'";
$queryuser=$mysqli->query($listauser);
$lineuser=$queryuser->fetch_array();

//cadastrar
if($enviocad=="s" AND $arquivo01_nome==""){

$cod=rand("1","1234567890");
$cadast="UPDATE tbl_anuncio SET estado='".$lineuser['estado']."',cidade='".$lineuser['cidade']."',titulo='".$titulo."',preco='".$preco."',id_categoria='".$idcat."',categoria='".$cat."',id_tecnologia='".$linetec2['id_cod']."',tecnologia='".$linetec2['nome']."',id_subcategoria='".$valoressuprimento."',subcategoria='".$valoressuprimento2."',descricao='".$descricao."',status='0' WHERE id_cod='".$area."' AND id_user='".$lineuser['id_cod']."'";
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
$cadastimg="INSERT into tbl_anuncio_galeria (id_cod,id_anuncio,avatar,image) values ('".md5($codimg)."','".$area."','".$avatar3."','".$avatar4."')";
$queryimg=$mysqli->query($cadastimg);
}
break;
}
}
//direciona
header("Location: editar-anuncio-suprimentos?area=".$area."");
}elseif($enviocad=="s" AND $arquivo01_nome!=""){

//img
require"img.php";
$cod=rand("1","1234567890");

$cadast="UPDATE tbl_anuncio SET estado='".$lineuser['estado']."',cidade='".$lineuser['cidade']."',titulo='".$titulo."',preco='".$preco."',id_categoria='".$idcat."',categoria='".$cat."',id_tecnologia='".$linetec2['id_cod']."',tecnologia='".$linetec2['nome']."',id_subcategoria='".$valoressuprimento."',subcategoria='".$valoressuprimento2."',descricao='".$descricao."',status='0',avatar='".$avatar."',image='".$avatar2."' WHERE id_cod='".$area."' AND id_user='".$lineuser['id_cod']."'";
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
$cadastimg="INSERT into tbl_anuncio_galeria (id_cod,id_anuncio,avatar,image) values ('".md5($codimg)."','".$area."','".$avatar3."','".$avatar4."')";
$queryimg=$mysqli->query($cadastimg);

}
break;
}
}
//direciona
header("Location: editar-anuncio-suprimentos?area=".$area."");
}
?>