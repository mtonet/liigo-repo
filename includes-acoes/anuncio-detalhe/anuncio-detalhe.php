<?php
//anuncio detalhe

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));

$formmsgtxt=$mysqli->real_escape_string(strip_tags(trim($_POST['formmsgtxt'])));
$enviomsgtxt=$mysqli->real_escape_string(strip_tags(trim($_POST['enviomsgtxt'])));

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='4' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//anuncio
$listaan="SELECT * FROM tbl_anuncio WHERE id_cod='".$area."'";
$queryan=$mysqli->query($listaan);
$linean=$queryan->fetch_array();

//galeria
$lista2="SELECT * FROM tbl_anuncio_galeria WHERE id_anuncio='".$area."'";
$query2=$mysqli->query($lista2);
$linha2=$query2->num_rows;

$lista3="SELECT * FROM tbl_anuncio_galeria WHERE id_anuncio='".$area."'";
$query3=$mysqli->query($lista3);

//dados anunciante
$listauser="SELECT nome,email,celular,id_cod,avatar,facebook,twitter,linkedin from tbl_usuarios WHERE id_cod='".$linean['id_user']."'";
$queryuser=$mysqli->query($listauser);
$lineuser=$queryuser->fetch_array();

//pergunta
if($enviomsgtxt=="s" AND $formmsgtxt==""){
$msgtxt='<div class="alert-box error"><i class="fa fa-check icon"></i> Por favor descreva sua pergunta para o anúncio.</div>';
}elseif($enviomsgtxt=="s" AND $formmsgtxt!=""){

//pergunta


$msgtxt='<div class="alert-box success"><i class="fa fa-check icon"></i> Pergunta enviada com sucesso.</div>';
}
?>