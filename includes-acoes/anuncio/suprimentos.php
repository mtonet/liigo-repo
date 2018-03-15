<?php
//suprimentos


//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='7' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//tecnologia (tbl_subcategoria equipamentos)
$listatec="SELECT id_cod,nome,id_categoria from tbl_subcategoria WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' ORDER BY nome asc";
$querytec=$mysqli->query($listatec);

//tipo supri
$listasupri="SELECT id_cod,nome,status from tbl_subcategoria WHERE id_categoria='21b2e6efe1400635f92d0320eed420a5' AND status='1' ORDER BY nome asc";
$querysupri=$mysqli->query($listasupri);


?>