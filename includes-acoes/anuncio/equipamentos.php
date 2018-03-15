<?php
//equipamentos


//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='5' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//marca
$listamarc="SELECT id_cod,nome from tbl_marca ORDER BY nome asc";
$querymarc=$mysqli->query($listamarc);

//cabeça impressao
$listacab="SELECT id_cod,nome from tbl_cabeca_impressao ORDER BY nome asc";
$querycab=$mysqli->query($listacab);

//tecnologia (subcategoria)
$listatec="SELECT id_cod,nome,id_categoria from tbl_subcategoria WHERE id_categoria='4633a7bd213e1971059c2ce5b76c7e0e' ORDER BY nome asc";
$querytec=$mysqli->query($listatec);

//condicao
$listacond="SELECT id_cod,nome from tbl_condicao_equipamento ORDER BY nome asc";
$querycond=$mysqli->query($listacond);


?>