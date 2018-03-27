<?php
//cadastro

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='1' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

//cad
$ref=$mysqli->real_escape_string(strip_tags(trim($_GET['ref'])));
$nome=$mysqli->real_escape_string(strip_tags(trim($_POST['nome'])));
$email=$mysqli->real_escape_string(strip_tags(trim($_POST['email'])));
$telefone=$mysqli->real_escape_string(strip_tags(trim($_POST['telefone'])));
$celular=$mysqli->real_escape_string(strip_tags(trim($_POST['celular'])));
$cpf_cnpj=$mysqli->real_escape_string(strip_tags(trim($_POST['cpf_cnpj'])));
$estado=$mysqli->real_escape_string(strip_tags(trim($_POST['estado'])));
$cidade=$mysqli->real_escape_string(strip_tags(trim($_POST['cidade'])));
$pass=$mysqli->real_escape_string(strip_tags(trim($_POST['pass'])));
$pass_confirm=$mysqli->real_escape_string(strip_tags(trim($_POST['pass_confirm'])));
$enviocad=$mysqli->real_escape_string(strip_tags(trim($_POST['enviocad'])));

//session
$_SESSION['nome']=$nome;
$_SESSION['email']=$email;
$_SESSION['telefone']=$telefone;
$_SESSION['celular']=$celular;
$_SESSION['cpf_cnpj']=$cpf_cnpj;
$_SESSION['estado']=$estado;
$_SESSION['cidade']=$cidade;

//verifica cadastro
$listacad="SELECT cpf_cnpj,email FROM tbl_usuarios WHERE cpf_cnpj='".$cpf_cnpj."' OR email='".$email."'";
$querycad=$mysqli->query($listacad);
$rowcad=$querycad->num_rows;

//estados
$listaestad="SELECT Uf FROM tbl_estado ORDER BY Uf ASC";
$queryestad=$mysqli->query($listaestad);

//condicao
if($nome==""){
$msgscad='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe um nome</div>';
}elseif($email==""){
$msgscad='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe um email</div>';
}elseif($celular==""){
$msgscad='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe um celular</div>';
}elseif($cpf_cnpj==""){
$msgscad='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe um CPF ou CNPJ</div>';
}elseif($rowcad!=""){
$msgscad='<div class="alert-box error"><i class="fa fa-close icon"></i> Email ou CPF/CNPJ já possuí um cadastro</div>';
}elseif($estado==""){
$msgscad='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe um estado</div>';
}elseif($cidade==""){
$msgscad='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe uma cidade</div>';
}elseif($pass==""){
$msgscad='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe uma senha</div>';
}elseif($pass_confirm==""){
$msgscad='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor confirme sua senha</div>';
}elseif($pass!=$pass_confirm){
$msgscad='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor confirme sua senha corretamente</div>';
}elseif($pass_confirm!=$pass){
$msgscad='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor confirme sua senha corretamente</div>';
}elseif($enviocad=="s"){

//cad

$cod=rand("1","1234567890");
$cadast="INSERT into tbl_usuarios (id_cod,nome,email,telefone,celular,cpf_cnpj,estado,cidade,pass,s_v) values ('".md5($cod)."','".$nome."','".$email."','".$telefone."','".$celular."','".$cpf_cnpj."','".$estado."','".$cidade."','".md5($pass)."','".$pass."')";
$query=$mysqli->query($cadast);

//email para o usuário
require"email.php";

session_start();
$_SESSION['logadaco_site_liigo_265']=$email;
$_SESSION['passadaco_site_liigo_689']=$pass;
//
$msgscad='<div class="alert-box success"><i class="fa fa-check icon"></i> Cadastro efetuado com sucesso!</div>';
//
header("Refresh:2; url=meu-perfil");	

if($ref!=""){
header("Refresh:2; url=anuncio-detalhe?area=".$ref."");	
}

}
?>