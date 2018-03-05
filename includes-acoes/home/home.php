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

?>