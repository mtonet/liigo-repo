<?php
//equipamentos

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
$listatec="SELECT id_cod,nome from tbl_tecnologia ORDER BY nome asc";
$querytec=$mysqli->query($listatec);

//condicao
$listacond="SELECT id_cod,nome from tbl_condicao_equipamento ORDER BY nome asc";
$querycond=$mysqli->query($listacond);

//
$num_registro = 10;
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
}else{
$sqlcup="SELECT * FROM tbl_anuncio WHERE (condicao='".$equipamento."' OR tecnologia='".$tecnologia."' OR marca='".$marca."' OR cabeca_impressao='".$cabeca."') AND id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}


if($acao=="date_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="date_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND status='1' ORDER BY data ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="price_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND status='1' ORDER BY preco DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="price_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' AND status='1' ORDER BY preco ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

?>