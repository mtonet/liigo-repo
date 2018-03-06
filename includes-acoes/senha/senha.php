<?php
//senha

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='23' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

$emails=$mysqli->real_escape_string(strip_tags(trim($_POST['emails'])));
$envioesq=$mysqli->real_escape_string(strip_tags(trim($_POST['envioesq'])));

//verifica cadastro
$listacad="SELECT email FROM tbl_usuarios WHERE email='".$emails."'";
$querycad=$mysqli->query($listacad);
$rowcad=$querycad->num_rows;

//condicao
if($emails==""){
$msgs='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe um email</div>';
}elseif($rowcad==""){
$msgs='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe um email válido</div>';
}elseif($envioesq=="s" AND $rowcad!=""){

$listacad2="SELECT email,nome,s_v FROM tbl_usuarios WHERE email='".$emails."'";
$querycad2=$mysqli->query($listacad2);
$dadocad2=$querycad2->fetch_array();

//email para o usuário
require"email.php";

$msgs='<div class="alert-box success"><i class="fa fa-check icon"></i> Reenvio enviado com sucesso!</div>';

}
?>