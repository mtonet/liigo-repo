<?php
//home

//numeros
$listaat="SELECT id from tbl_anuncio";
$queryat=$mysqli->query($listaat);
$rowat=$queryat->num_rows;

$listaat2="SELECT id from tbl_usuarios";
$queryat2=$mysqli->query($listaat2);
$rowat2=$queryat2->num_rows;

$listaat3="SELECT id,status from tbl_anuncio WHERE status='0'";
$queryat3=$mysqli->query($listaat3);
$rowat3=$queryat3->num_rows;

//últimos anuncios
$listault="SELECT id,id_cod,titulo,data,descricao,user from tbl_anuncio ORDER BY id DESC LIMIT 5";
$queryult=$mysqli->query($listault);

?>