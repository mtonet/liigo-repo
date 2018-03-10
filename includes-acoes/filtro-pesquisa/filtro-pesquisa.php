<?php
//filtro pesquisa

$estadobusc=$mysqli->real_escape_string(strip_tags(trim($_GET['estadobusc'])));
$cidadebusc=$mysqli->real_escape_string(strip_tags(trim($_GET['cidadebusc'])));
$precisabusc=$mysqli->real_escape_string(strip_tags(trim($_GET['precisabusc'])));
$servicosbusc=$mysqli->real_escape_string(strip_tags(trim($_GET['servicosbusc'])));

//estados dos anuncios apenas
$listaestados="SELECT estado, COUNT(estado) AS estados FROM tbl_anuncio GROUP BY estado ORDER BY estado ASC";
$queryestados=$mysqli->query($listaestados);

//categorias
$listacategoria="SELECT * FROM tbl_categoria WHERE status='1' ORDER BY nome ASC";
$querycategoria=$mysqli->query($listacategoria);

?>