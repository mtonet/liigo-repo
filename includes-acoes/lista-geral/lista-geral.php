<?php
//lista geral

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
$listaserv="SELECT id_cod,nome from tbl_tipo_servico ORDER BY nome asc";
$queryserv=$mysqli->query($listaserv);

//transporte
$listatrans="SELECT id_cod,nome from tbl_tipo_transporte ORDER BY nome asc";
$querytrans=$mysqli->query($listatrans);

//tipo supri
$listasupri="SELECT id_cod,nome from tbl_tipo_suprimento ORDER BY nome asc";
$querysupri=$mysqli->query($listasupri);


//
$num_registro = 10;
$pagina = isset($pag) ? $pag : 0;
if(empty($pagina))
{
$pagina = 1;
}
$inicio = ($pagina * $num_registro) - $num_registro;

if($equipamento=="" AND $tecnologia=="" AND $marca=="" AND $cabeca=="" AND $servico=="" AND $transporte=="" AND $suprimento=="" AND $acao==""){
$sqlcup="SELECT * FROM tbl_anuncio WHERE status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}else{
$sqlcup="SELECT * FROM tbl_anuncio WHERE (condicao='".$equipamento."' OR tecnologia='".$tecnologia."' OR marca='".$marca."' OR cabeca_impressao='".$cabeca."' OR tipo_suprimento='".$suprimento."' OR tipo_servico='".$servico."' OR tipo_transporte='".$transporte."') AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}


if($acao=="date_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="date_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE status='1' ORDER BY data ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="price_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE status='1' ORDER BY preco DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="price_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE status='1' ORDER BY preco ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

?>