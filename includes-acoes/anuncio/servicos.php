<?php
//servicos


//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='6' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//servicos
$listaserv="SELECT id_cod,nome,status from tbl_subcategoria WHERE id_categoria='318b9cddcea5ebcb2c1171fe1cf277db' AND status='1' ORDER BY nome asc";
$queryserv=$mysqli->query($listaserv);


?>