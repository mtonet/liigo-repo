<?php
//home

//slide
$listasl="SELECT id,image,texto1,texto2,status from tbl_slide_home ORDER BY id ASC";
$querysl=$mysqli->query($listasl);
$listasl2="SELECT id,image from tbl_slide_home ORDER BY id ASC";
$querysl2=$mysqli->query($listasl2);

//depoimentos
$listadep="SELECT id,nome,profissao,depoimento,status,avatar from tbl_depoimentos ORDER BY id asc";
$querydep=$mysqli->query($listadep);

//buscas mais populares

//o mais buscado
$listamais="SELECT termo, COUNT(termo) AS qtd from tbl_termos_pesquisados GROUP BY termo ORDER BY qtd DESC LIMIT 1";
$querymais=$mysqli->query($listamais);
$linemais=$querymais->fetch_array();
$sqlcup="SELECT * FROM tbl_anuncio WHERE (categoria like'%".$linemais['termo']."%' OR marca like'%".$linemais['termo']."%' OR cabeca_impressao like'%".$linemais['termo']."%' OR tecnologia like'%".$linemais['termo']."%' OR condicao like'%".$linemais['termo']."%' OR tipo_suprimento like'%".$linemais['termo']."%' OR tipo_servico like'%".$linemais['termo']."%' OR tipo_transporte like'%".$linemais['termo']."%' OR descricao like'%".$linemais['termo']."%') AND status='1'";
$querycup=$mysqli->query($sqlcup);
$numCont=$querycup->num_rows;

//demais
$listamais2="SELECT termo, COUNT(termo) AS qtd from tbl_termos_pesquisados WHERE termo!='".$linemais['termo']."' GROUP BY termo ORDER BY qtd DESC LIMIT 5";
$querymais2=$mysqli->query($listamais2);
$numCont2=$querymais2->num_rows;

?>