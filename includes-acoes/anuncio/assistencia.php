<?php
//assistencia


//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='3' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//marca
$listamarc="SELECT id_cod,nome from tbl_marca ORDER BY nome asc";
$querymarc=$mysqli->query($listamarc);

//tecnologia (tbl_subcategoria assistencia)
$listatec="SELECT id_cod,nome,id_categoria from tbl_subcategoria WHERE id_categoria='c614d0c0bb7cb5993004d956564b1687' ORDER BY nome asc";
$querytec=$mysqli->query($listatec);

?>