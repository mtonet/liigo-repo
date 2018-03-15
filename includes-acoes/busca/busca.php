<?php
//busca principal

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='17' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

$buscaprinc=$mysqli->real_escape_string(strip_tags(trim($_GET['buscaprinc'])));
$acao=$mysqli->real_escape_string(strip_tags(trim($_GET['acao'])));
$pag=$mysqli->real_escape_string(strip_tags(trim($_GET['pagina'])));

//verifica o termo pesquisado e trás as categorias

//busca
$num_registro = 100;
$pagina = isset($pag) ? $pag : 0;
if(empty($pagina))
{
$pagina = 1;
}
$inicio = ($pagina * $num_registro) - $num_registro;
//
if($acao==""){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (titulo like'%".$buscaprinc."%' OR categoria like'%".$buscaprinc."%' OR marca like'%".$buscaprinc."%' OR cabeca_impressao like'%".$buscaprinc."%' OR tecnologia like'%".$buscaprinc."%' OR condicao like'%".$buscaprinc."%' OR descricao like'%".$buscaprinc."%') AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}elseif($acao=="date_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (titulo like'%".$buscaprinc."%' OR categoria like'%".$buscaprinc."%' OR marca like'%".$buscaprinc."%' OR cabeca_impressao like'%".$buscaprinc."%' OR tecnologia like'%".$buscaprinc."%' OR condicao like'%".$buscaprinc."%' OR descricao like'%".$buscaprinc."%') AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}elseif($acao=="date_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (titulo like'%".$buscaprinc."%' OR categoria like'%".$buscaprinc."%' OR marca like'%".$buscaprinc."%' OR cabeca_impressao like'%".$buscaprinc."%' OR tecnologia like'%".$buscaprinc."%' OR condicao like'%".$buscaprinc."%' OR descricao like'%".$buscaprinc."%') AND status='1' ORDER BY data ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}elseif($acao=="price_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (titulo like'%".$buscaprinc."%' OR categoria like'%".$buscaprinc."%' OR marca like'%".$buscaprinc."%' OR cabeca_impressao like'%".$buscaprinc."%' OR tecnologia like'%".$buscaprinc."%' OR condicao like'%".$buscaprinc."%' OR descricao like'%".$buscaprinc."%') AND status='1' ORDER BY preco DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}elseif($acao=="price_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (titulo like'%".$buscaprinc."%' OR categoria like'%".$buscaprinc."%' OR marca like'%".$buscaprinc."%' OR cabeca_impressao like'%".$buscaprinc."%' OR tecnologia like'%".$buscaprinc."%' OR condicao like'%".$buscaprinc."%' OR descricao like'%".$buscaprinc."%') AND status='1' ORDER BY preco ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}
//total
$sqlTota="SELECT * FROM tbl_anuncio ORDER BY data DESC";
$queryTotal=$mysqli->query($sqlTota);
$numTotal=$queryTotal->num_rows;

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

//verifica se o termo buscado encontra-se com alguma categoria
$sqlcup2="SELECT titulo,categoria,status,marca,cabeca_impressao,tecnologia,condicao,descricao, COUNT(categoria) AS categorias FROM tbl_anuncio WHERE (titulo='%".$buscaprinc."%' OR categoria like'%".$buscaprinc."%' OR marca like'%".$buscaprinc."%' OR cabeca_impressao like'%".$buscaprinc."%' OR tecnologia like'%".$buscaprinc."%' OR condicao like'%".$buscaprinc."%' OR descricao like'%".$buscaprinc."%') AND status='1' GROUP BY categoria";
$querycup2=$mysqli->query($sqlcup2);
$numCont2=$querycup2->num_rows;

//salva termo pesquisado
$cadast="INSERT into tbl_termos_pesquisados (termo) values ('".$buscaprinc."')";
$query=$mysqli->query($cadast);

?>