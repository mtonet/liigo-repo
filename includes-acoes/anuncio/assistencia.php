<?php
//assistencia


//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='3' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//marca
$listamarc="SELECT id_cod,nome from tbl_marca ORDER BY nome asc";
$querymarc=$mysqli->query($listamarc);

//tecnologia
$listatec="SELECT id_cod,nome from tbl_tecnologia ORDER BY nome asc";
$querytec=$mysqli->query($listatec);

?>