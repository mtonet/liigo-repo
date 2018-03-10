<?php
//transportadoras

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='15' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

$transporte=$mysqli->real_escape_string(strip_tags(trim($_GET['transporte'])));
$estado=$mysqli->real_escape_string(strip_tags(trim($_GET['estado'])));
$cidade=$mysqli->real_escape_string(strip_tags(trim($_GET['cidade'])));
$acao=$mysqli->real_escape_string(strip_tags(trim($_GET['acao'])));
$pag=$mysqli->real_escape_string(strip_tags(trim($_GET['pagina'])));


//transporte
$listatrans="SELECT id_cod,nome from tbl_tipo_transporte ORDER BY nome asc";
$querytrans=$mysqli->query($listatrans);

//
$num_registro = 10;
$pagina = isset($pag) ? $pag : 0;
if(empty($pagina))
{
$pagina = 1;
}
$inicio = ($pagina * $num_registro) - $num_registro;

if($transporte=="" AND $estado=="" AND $cidade=="" AND $acao==""){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='70f7e11763a006e605ec81c4a4858b10' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}else{
$sqlcup="SELECT * FROM tbl_anuncio WHERE (tipo_transporte='".$transporte."' OR estado='".$estado."' OR cidade='".$cidade."') AND id_categoria='70f7e11763a006e605ec81c4a4858b10' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}


if($acao=="date_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='70f7e11763a006e605ec81c4a4858b10' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="date_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='70f7e11763a006e605ec81c4a4858b10' AND status='1' ORDER BY data ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="price_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='70f7e11763a006e605ec81c4a4858b10' AND status='1' ORDER BY preco DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="price_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='70f7e11763a006e605ec81c4a4858b10' AND status='1' ORDER BY preco ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

?>