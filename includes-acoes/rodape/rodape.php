<?php
//opções rodape

//newsletter##
$emailnws=$mysqli->real_escape_string(strip_tags(trim($_POST['emailnws'])));
$envionws=$mysqli->real_escape_string(strip_tags(trim($_POST['envionws'])));

//verifica se não existe
$listanws="SELECT email from tbl_newsletter WHERE email='".$emailnws."'";
$querynws=$mysqli->query($listanws);
$linenws=$querynws->fetch_array();
$rownws=$querynws->num_rows;


//condicao
if($emailnws==""){
$msgsnws='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe um email</div>';
}elseif($linenws['email']==$emailnws){
$msgsnws='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe um email diferente</div>';
}elseif($envionws=="s" AND $linenws['email']!=$emailnws){

//cadastra email

$cod=rand("1","1234567890");
$cadast="INSERT INTO tbl_newsletter (id_cod,email) VALUES ('".md5($cod)."','".$emailnws."')";
$query=$mysqli->query($cadast);

$msgsnws='<div class="alert-box success"><i class="fa fa-check icon"></i> Email cadastrado com sucesso!</div>';
}

//em alta##
?>