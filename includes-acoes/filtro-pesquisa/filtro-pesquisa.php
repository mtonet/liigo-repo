<?php
//filtro pesquisa

$estadobusc=$mysqli->real_escape_string(strip_tags(trim($_GET['estadobusc'])));
$cidadebusc=$mysqli->real_escape_string(strip_tags(trim($_GET['cidadebusc'])));
$precisabusc=$mysqli->real_escape_string(strip_tags(trim($_GET['precisabusc'])));
$servicosbusc=$mysqli->real_escape_string(strip_tags(trim($_GET['servicosbusc'])));

//estados dos anuncios apenas
$listaestados="SELECT status,estado, COUNT(estado) AS estados FROM tbl_anuncio WHERE status='1' GROUP BY estado ORDER BY estado ASC";
$queryestados=$mysqli->query($listaestados);

//categorias
$listacategoria="SELECT status,categoria, COUNT(categoria) AS categorias FROM tbl_anuncio WHERE status='1' GROUP BY categoria ORDER BY categoria ASC";
$querycategoria=$mysqli->query($listacategoria);

?>