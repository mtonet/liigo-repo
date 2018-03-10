<?php
//equipamentos

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='14' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

$suprimento=$mysqli->real_escape_string(strip_tags(trim($_GET['suprimento'])));
$tecnologia=$mysqli->real_escape_string(strip_tags(trim($_GET['tecnologia'])));
$acao=$mysqli->real_escape_string(strip_tags(trim($_GET['acao'])));
$pag=$mysqli->real_escape_string(strip_tags(trim($_GET['pagina'])));


//tecnologia
$listatec="SELECT id_cod,nome from tbl_tecnologia ORDER BY nome asc";
$querytec=$mysqli->query($listatec);

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

if($suprimento=="" AND $tecnologia=="" AND $acao==""){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='21b2e6efe1400635f92d0320eed420a5' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}else{
$sqlcup="SELECT * FROM tbl_anuncio WHERE (tipo_suprimento='".$suprimento."' OR tecnologia='".$tecnologia."') AND id_categoria='21b2e6efe1400635f92d0320eed420a5' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}


if($acao=="date_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='21b2e6efe1400635f92d0320eed420a5' AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="date_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='21b2e6efe1400635f92d0320eed420a5' AND status='1' ORDER BY data ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="price_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='21b2e6efe1400635f92d0320eed420a5' AND status='1' ORDER BY preco DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}

if($acao=="price_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE id_categoria='21b2e6efe1400635f92d0320eed420a5' AND status='1' ORDER BY preco ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}


?>