<?php
//equipamentos

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='13' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

$equipamento=$mysqli->real_escape_string(strip_tags(trim($_GET['equipamento'])));
$tecnologia=$mysqli->real_escape_string(strip_tags(trim($_GET['tecnologia'])));
$marca=$mysqli->real_escape_string(strip_tags(trim($_GET['marca'])));
$cabeca=$mysqli->real_escape_string(strip_tags(trim($_GET['cabeca'])));
$acao=$mysqli->real_escape_string(strip_tags(trim($_GET['acao'])));
$pag=$mysqli->real_escape_string(strip_tags(trim($_GET['pagina'])));


//marca
$listamarc="SELECT id_cod,nome from tbl_marca ORDER BY nome asc";
$querymarc=$mysqli->query($listamarc);

//cabeça impressao
$listacab="SELECT id_cod,nome from tbl_cabeca_impressao ORDER BY nome asc";
$querycab=$mysqli->query($listacab);

//tecnologia
$listatec="SELECT id_cod,nome,id_categoria from tbl_subcategoria WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' ORDER BY nome asc";
$querytec=$mysqli->query($listatec);

//condicao
$listacond="SELECT id_cod,nome from tbl_condicao_equipamento ORDER BY nome asc";
$querycond=$mysqli->query($listacond);

//
$num_registro = 15;
$pagina = isset($pag) ? $pag : 0;
if(empty($pagina))
{
$pagina = 1;
}
$inicio = ($pagina * $num_registro) - $num_registro;

if($equipamento=="" AND $tecnologia=="" AND $marca=="" AND $cabeca=="" AND $acao==""){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
//total
$sqlTota="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND status='1' ORDER BY data DESC";
$queryTotal=$mysqli->query($sqlTota);
$numTotal=$queryTotal->num_rows;

}elseif($equipamento!="" AND $tecnologia=="" AND $marca=="" AND $cabeca=="" AND $acao==""){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND condicao='".$equipamento."' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
//total
$sqlTota="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND condicao='".$equipamento."' AND status='1' ORDER BY data DESC";
$queryTotal=$mysqli->query($sqlTota);
$numTotal=$queryTotal->num_rows;

}elseif($equipamento=="" AND $tecnologia!="" AND $marca=="" AND $cabeca=="" AND $acao==""){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND subcategoria='".$tecnologia."' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
//total
$sqlTota="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND subcategoria='".$tecnologia."' AND status='1' ORDER BY data DESC";
$queryTotal=$mysqli->query($sqlTota);
$numTotal=$queryTotal->num_rows;

}elseif($equipamento=="" AND $tecnologia=="" AND $marca!="" AND $cabeca=="" AND $acao==""){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND marca='".$marca."' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
//total
$sqlTota="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND marca='".$marca."' AND status='1' ORDER BY data DESC";
$queryTotal=$mysqli->query($sqlTota);
$numTotal=$queryTotal->num_rows;

}elseif($equipamento=="" AND $tecnologia=="" AND $marca=="" AND $cabeca!="" AND $acao==""){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND cabeca_impressao='".$cabeca."' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
//total
$sqlTota="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND cabeca_impressao='".$cabeca."' AND status='1' ORDER BY data DESC";
$queryTotal=$mysqli->query($sqlTota);
$numTotal=$queryTotal->num_rows;

}elseif($equipamento!="" AND $tecnologia!="" AND $marca!="" AND $cabeca!="" AND $acao==""){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND condicao='".$equipamento."' AND subcategoria='".$tecnologia."' AND marca='".$marca."' AND cabeca_impressao='".$cabeca."' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
//total
$sqlTota="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND condicao='".$equipamento."' AND subcategoria='".$tecnologia."' AND marca='".$marca."' AND cabeca_impressao='".$cabeca."' AND status='1' ORDER BY data DESC";
$queryTotal=$mysqli->query($sqlTota);
$numTotal=$queryTotal->num_rows;
}

if($equipamento!=""){$equipamentodb="AND condicao='".$equipamento."'";}
if($tecnologia!=""){$tecnologiadb="AND subcategoria='".$tecnologia."'";}
if($marca!=""){$marcadb="AND marca='".$marca."'";}
if($cabeca!=""){$cabecadb="AND cabeca_impressao='".$cabeca."'";}

if($acao=="date_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND status='1' ".$equipamentodb." ".$tecnologiadb." ".$marcadb." ".$cabecadb." ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
//total
$sqlTota="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND status='1' ".$equipamentodb." ".$tecnologiadb." ".$marcadb." ".$cabecadb." ORDER BY data DESC";
$queryTotal=$mysqli->query($sqlTota);
$numTotal=$queryTotal->num_rows;
}

if($acao=="date_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND status='1' ".$equipamentodb." ".$tecnologiadb." ".$marcadb." ".$cabecadb." ORDER BY data ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
//total
$sqlTota="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND status='1' ".$equipamentodb." ".$tecnologiadb." ".$marcadb." ".$cabecadb." ORDER BY data ASC";
$queryTotal=$mysqli->query($sqlTota);
$numTotal=$queryTotal->num_rows;
}

if($acao=="price_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND status='1' ".$equipamentodb." ".$tecnologiadb." ".$marcadb." ".$cabecadb." ORDER BY preco DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
//total
$sqlTota="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND status='1' ".$equipamentodb." ".$tecnologiadb." ".$marcadb." ".$cabecadb." ORDER BY preco DESC";
$queryTotal=$mysqli->query($sqlTota);
$numTotal=$queryTotal->num_rows;
}

if($acao=="price_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND status='1' ".$equipamentodb." ".$tecnologiadb." ".$marcadb." ".$cabecadb." ORDER BY preco ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
//total
$sqlTota="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND status='1' ".$equipamentodb." ".$tecnologiadb." ".$marcadb." ".$cabecadb." ORDER BY preco ASC";
$queryTotal=$mysqli->query($sqlTota);
$numTotal=$queryTotal->num_rows;
}


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

?>