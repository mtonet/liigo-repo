<?php
//lista geral

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='12' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

$equipamento=$mysqli->real_escape_string(strip_tags(trim($_GET['equipamento'])));
$tecnologia=$mysqli->real_escape_string(strip_tags(trim($_GET['tecnologia'])));
$marca=$mysqli->real_escape_string(strip_tags(trim($_GET['marca'])));
$cabeca=$mysqli->real_escape_string(strip_tags(trim($_GET['cabeca'])));
$servico=$mysqli->real_escape_string(strip_tags(trim($_GET['servico'])));
$transporte=$mysqli->real_escape_string(strip_tags(trim($_GET['transporte'])));
$suprimento=$mysqli->real_escape_string(strip_tags(trim($_GET['suprimento'])));
$acao=$mysqli->real_escape_string(strip_tags(trim($_GET['acao'])));
$pag=$mysqli->real_escape_string(strip_tags(trim($_GET['pagina'])));

$estadobusc=$mysqli->real_escape_string(strip_tags(trim($_GET['estadobusc'])));
$cidadebusc=$mysqli->real_escape_string(strip_tags(trim($_GET['cidadebusc'])));
$precisabusc=$mysqli->real_escape_string(strip_tags(trim($_GET['precisabusc'])));
$servicosbusc=$mysqli->real_escape_string(strip_tags(trim($_GET['servicosbusc'])));
$enviofiltro=$mysqli->real_escape_string(strip_tags(trim($_GET['enviofiltro'])));

//condicao
$listacond="SELECT id_cod,nome from tbl_condicao_equipamento ORDER BY nome asc";
$querycond=$mysqli->query($listacond);

//tecnologia
$listatec="SELECT id_cod,nome from tbl_tecnologia ORDER BY nome asc";
$querytec=$mysqli->query($listatec);

//marca
$listamarc="SELECT id_cod,nome from tbl_marca ORDER BY nome asc";
$querymarc=$mysqli->query($listamarc);

//cabeça impressao
$listacab="SELECT id_cod,nome from tbl_cabeca_impressao ORDER BY nome asc";
$querycab=$mysqli->query($listacab);

//servicos
$listaserv="SELECT id_cod,nome from tbl_subcategoria ORDER BY nome asc";
$queryserv=$mysqli->query($listaserv);

//transporte
$listatrans="SELECT id_cod,nome from tbl_subcategoria ORDER BY nome asc";
$querytrans=$mysqli->query($listatrans);

//tipo supri
$listasupri="SELECT id_cod,nome from tbl_subcategoria ORDER BY nome asc";
$querysupri=$mysqli->query($listasupri);


//favoritos
if($action=="fav" AND isset($_SESSION['logadaco_site_liigo_265']) AND isset($_SESSION['passadaco_site_liigo_689'])){
//verifica se o usuário não é o dono do anuncio
$listauserv="SELECT id_cod,email,pass from tbl_usuarios WHERE email='".$_SESSION['logadaco_site_liigo_265']."' AND pass='".md5($_SESSION['passadaco_site_liigo_689'])."'";
$queryuserv=$mysqli->query($listauserv);
$numuserv=$queryuserv->num_rows;
$lineuserv=$queryuserv->fetch_array();

$sqlfav="SELECT id_cod,id_user FROM tbl_anuncio WHERE id_cod='".$area."' AND id_user='".$lineuserv['id_cod']."'";
$queryfav=$mysqli->query($sqlfav);
$numfav=$queryfav->num_rows;

$sqlfav2="SELECT id_user,id_anuncio FROM tbl_favoritos WHERE id_anuncio='".$area."' AND id_user='".$lineuserv['id_cod']."'";
$queryfav2=$mysqli->query($sqlfav2);
$numfav2=$queryfav2->num_rows;
//
if($numfav!=""){
$msgfav='<div class="alert-box error"><i class="fa fa-close icon"></i> Você não pode adicionar seu próprio anúncio em Favoritos.</div>';
}elseif($numfav2!=""){
$msgfav='<div class="alert-box error"><i class="fa fa-close icon"></i> Anúncio já adicionado a sua lista de Favoritos.</div>';
}elseif($numfav=="" AND $numuserv!="" AND $numfav2==""){
$cod=rand("1","1234567890");
$cadast="INSERT INTO tbl_favoritos (id_cod,id_user,id_anuncio) VALUES ('".md5($cod)."','".$lineuserv['id_cod']."','".$area."')";
$query=$mysqli->query($cadast);
$msgfav='<div class="alert-box success"><i class="fa fa-close icon"></i> Anúncio adicionado na sua lista de Favoritos.</div>';
}
}

//
$num_registro = 10;
$pagina = isset($pag) ? $pag : 0;
if(empty($pagina))
{
$pagina = 1;
}
$inicio = ($pagina * $num_registro) - $num_registro;

if($precisabusc!=""){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (estado LIKE '%".$estadobusc."%' OR (cidade LIKE '%".$cidadebusc."%')) AND categoria LIKE '%".$precisabusc."%' AND subcategoria LIKE '%".$servicosbusc."%' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}


if($enviofiltro=="s"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (estado LIKE '%".$estadobusc."%' OR (cidade LIKE '%".$cidadebusc."%') OR (condicao='".$equipamento."') OR (tecnologia='".$tecnologia."') OR (marca='".$marca."') OR (cabeca_impressao='".$cabeca_impressao."') OR (subcategoria='".$suprimento."') OR (subcategoria='".$servico."') OR (subcategoria='".$transporte."')) AND categoria LIKE '%".$precisabusc."%' AND subcategoria LIKE '%".$servicosbusc."%' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="date_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (estado LIKE '%".$estadobusc."%' OR (cidade LIKE '%".$cidadebusc."%') OR (condicao='".$equipamento."') OR (tecnologia='".$tecnologia."') OR (marca='".$marca."') OR (cabeca_impressao='".$cabeca_impressao."') OR (subcategoria='".$suprimento."') OR (subcategoria='".$servico."') OR (subcategoria='".$transporte."')) AND categoria LIKE '%".$precisabusc."%' AND subcategoria LIKE '%".$servicosbusc."%' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="date_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (estado LIKE '%".$estadobusc."%' OR (cidade LIKE '%".$cidadebusc."%') OR (condicao='".$equipamento."') OR (tecnologia='".$tecnologia."') OR (marca='".$marca."') OR (cabeca_impressao='".$cabeca_impressao."') OR (subcategoria='".$suprimento."') OR (subcategoria='".$servico."') OR (subcategoria='".$transporte."')) AND categoria LIKE '%".$precisabusc."%' AND subcategoria LIKE '%".$servicosbusc."%' AND status='1' ORDER BY data ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="price_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (estado LIKE '%".$estadobusc."%' OR (cidade LIKE '%".$cidadebusc."%') OR (condicao='".$equipamento."') OR (tecnologia='".$tecnologia."') OR (marca='".$marca."') OR (cabeca_impressao='".$cabeca_impressao."') OR (subcategoria='".$suprimento."') OR (subcategoria='".$servico."') OR (subcategoria='".$transporte."')) AND categoria LIKE '%".$precisabusc."%' AND subcategoria LIKE '%".$servicosbusc."%' AND status='1' ORDER BY preco DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="price_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (estado LIKE '%".$estadobusc."%' OR (cidade LIKE '%".$cidadebusc."%') OR (condicao='".$equipamento."') OR (tecnologia='".$tecnologia."') OR (marca='".$marca."') OR (cabeca_impressao='".$cabeca_impressao."') OR (subcategoria='".$suprimento."') OR (subcategoria='".$servico."') OR (subcategoria='".$transporte."')) AND categoria LIKE '%".$precisabusc."%' AND subcategoria LIKE '%".$servicosbusc."%' AND status='1' ORDER BY preco ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}
?>