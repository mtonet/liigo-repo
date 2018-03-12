<?php
//transportadoras

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='8' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//transporte
$listatrans="SELECT id_cod,nome,status from tbl_subcategoria WHERE id_categoria='70f7e11763a006e605ec81c4a4858b10' AND status='1' ORDER BY nome asc";
$querytrans=$mysqli->query($listatrans);
?>