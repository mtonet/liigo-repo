<?php
//transportadoras

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='8' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//transporte
$listatrans="SELECT id_cod,nome from tbl_tipo_transporte ORDER BY nome asc";
$querytrans=$mysqli->query($listatrans);
?>