<?php
//logout

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='22' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

unset($_SESSION['logadaco_site_liigo_265']);
unset($_SESSION['passadaco_site_liigo_689']);
?>