<?php
//busca principal

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='17' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

$buscaprinc=$mysqli->real_escape_string(strip_tags(trim($_GET['buscaprinc'])));
$acao=$mysqli->real_escape_string(strip_tags(trim($_GET['acao'])));
$pag=$mysqli->real_escape_string(strip_tags(trim($_GET['pagina'])));

//verifica o termo pesquisado e trás as categorias

//busca
$num_registro = 10;
$pagina = isset($pag) ? $pag : 0;
if(empty($pagina))
{
$pagina = 1;
}
$inicio = ($pagina * $num_registro) - $num_registro;
//
if($acao==""){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (categoria like'%".$buscaprinc."%' OR marca like'%".$buscaprinc."%' OR cabeca_impressao like'%".$buscaprinc."%' OR tecnologia like'%".$buscaprinc."%' OR condicao like'%".$buscaprinc."%' OR descricao like'%".$buscaprinc."%') AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}elseif($acao=="date_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (categoria like'%".$buscaprinc."%' OR marca like'%".$buscaprinc."%' OR cabeca_impressao like'%".$buscaprinc."%' OR tecnologia like'%".$buscaprinc."%' OR condicao like'%".$buscaprinc."%' OR descricao like'%".$buscaprinc."%') AND status='1' ORDER BY data DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}elseif($acao=="date_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (categoria like'%".$buscaprinc."%' OR marca like'%".$buscaprinc."%' OR cabeca_impressao like'%".$buscaprinc."%' OR tecnologia like'%".$buscaprinc."%' OR condicao like'%".$buscaprinc."%' OR descricao like'%".$buscaprinc."%') AND status='1' ORDER BY data ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}elseif($acao=="price_desc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (categoria like'%".$buscaprinc."%' OR marca like'%".$buscaprinc."%' OR cabeca_impressao like'%".$buscaprinc."%' OR tecnologia like'%".$buscaprinc."%' OR condicao like'%".$buscaprinc."%' OR descricao like'%".$buscaprinc."%') AND status='1' ORDER BY preco DESC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}elseif($acao=="price_asc"){
$sqlcup="SELECT * FROM tbl_anuncio WHERE (categoria like'%".$buscaprinc."%' OR marca like'%".$buscaprinc."%' OR cabeca_impressao like'%".$buscaprinc."%' OR tecnologia like'%".$buscaprinc."%' OR condicao like'%".$buscaprinc."%' OR descricao like'%".$buscaprinc."%') AND status='1' ORDER BY preco ASC LIMIT ".$inicio.", ".$num_registro."";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;
}
//total
$sqlTota="SELECT * FROM tbl_anuncio ORDER BY data DESC";
$queryTotal=$mysqli->query($sqlTota);
$numTotal=$queryTotal->num_rows;

//favoritos


//verifica se o termo buscado encontra-se com alguma categoria
$sqlcup2="SELECT categoria,status,marca,cabeca_impressao,tecnologia,condicao,descricao, COUNT(categoria) AS categorias FROM tbl_anuncio WHERE (categoria like'%".$buscaprinc."%' OR marca like'%".$buscaprinc."%' OR cabeca_impressao like'%".$buscaprinc."%' OR tecnologia like'%".$buscaprinc."%' OR condicao like'%".$buscaprinc."%' OR descricao like'%".$buscaprinc."%') AND status='1' GROUP BY categoria";
$querycup2=$mysqli->query($sqlcup2);
$numCont2=$querycup2->num_rows;

//salva termo pesquisado
$cadast="INSERT into tbl_termos_pesquisados (termo) values ('".$buscaprinc."')";
$query=$mysqli->query($cadast);

?>