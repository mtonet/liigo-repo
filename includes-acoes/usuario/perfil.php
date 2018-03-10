<?php
//perfil

//imagem topo
$listaimgt="SELECT image,id_pagina,status FROM tbl_img_internas WHERE id_pagina='21' AND status='1'";
$queryimgt=$mysqli->query($listaimgt);
$lineimgt=$queryimgt->fetch_array();

$listadpu="SELECT * FROM tbl_usuarios WHERE email='".$dadosla['email']."' AND pass='".$dadosla['pass']."'";
$querydpu=$mysqli->query($listadpu);
$linedpu=$querydpu->fetch_array();

//alterar cadastro
$nome=$mysqli->real_escape_string(strip_tags(trim($_POST['nome'])));
$email=$mysqli->real_escape_string(strip_tags(trim($_POST['email'])));
$telefone=$mysqli->real_escape_string(strip_tags(trim($_POST['telefone'])));
$celular=$mysqli->real_escape_string(strip_tags(trim($_POST['celular'])));
$cpf_cnpj=$mysqli->real_escape_string(strip_tags(trim($_POST['cpf_cnpj'])));
$descricao=$mysqli->real_escape_string(strip_tags(trim($_POST['descricao'])));
$facebook=$mysqli->real_escape_string(strip_tags(trim($_POST['facebook'])));
$twitter=$mysqli->real_escape_string(strip_tags(trim($_POST['twitter'])));
$linkedin=$mysqli->real_escape_string(strip_tags(trim($_POST['linkedin'])));
$estado=$mysqli->real_escape_string(strip_tags(trim($_POST['estado'])));
$cidade=$mysqli->real_escape_string(strip_tags(trim($_POST['cidade'])));
$pass=$mysqli->real_escape_string(strip_tags(trim($_POST['new_pass'])));
$pass_confirm=$mysqli->real_escape_string(strip_tags(trim($_POST['new_pass_confirm'])));
$envioperfil=$mysqli->real_escape_string(strip_tags(trim($_POST['envioperfil'])));

//objtos file
$arquivo01_nome=$_FILES['imagem']['name'];     
$arquivo01_temporario=$_FILES['imagem']['tmp_name'];

//condicao
if($nome==""){
$msgsperf='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe um nome</div>';
}elseif($email==""){
$msgsperf='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe um email</div>';
}elseif($celular==""){
$msgsperf='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe um celular</div>';
}elseif($cpf_cnpj==""){
$msgsperf='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe um CPF ou CNPJ</div>';
}elseif($estado==""){
$msgsperf='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe um estado</div>';
}elseif($cidade==""){
$msgsperf='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor informe uma cidade</div>';

}elseif($pass!=$pass_confirm){
$msgsperf='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor confirme sua senha corretamente</div>';
}elseif($pass_confirm!=$pass){
$msgsperf='<div class="alert-box error"><i class="fa fa-close icon"></i> Por favor confirme sua senha corretamente</div>';

##########
}elseif($envioperfil=="s" AND $pass=="" AND $pass_confirm==""){

$cadast="UPDATE tbl_usuarios SET nome='".$nome."',descricao='".$descricao."',facebook='".$facebook."',twitter='".$twitter."',linkedin='".$linkedin."',email='".$email."',telefone='".$telefone."',celular='".$celular."',cpf_cnpj='".$cpf_cnpj."',estado='".$estado."',cidade='".$cidade."' WHERE id='".$dadosla['id']."' AND email='".$dadosla['email']."' AND pass='".$dadosla['pass']."'";
$query=$mysqli->query($cadast);

//img
if($arquivo01_nome!=""){
if($linedpu['avatar']!=""){
unlink("uploads/usuarios/".$linedpu['avatar']."");
}
//
require"img-pq.php";	
//
$cadast="UPDATE tbl_usuarios SET avatar='".$avatar."' WHERE id='".$dadosla['id']."' AND email='".$dadosla['email']."' AND pass='".$dadosla['pass']."'";
$query=$mysqli->query($cadast);
}

$msgsperf='<div class="alert-box success"><i class="fa fa-check icon"></i> Cadastrado alterado com sucesso!</div>';
header("Refresh:3; url=meu-perfil");

##########
}elseif($envioperfil=="s" AND $pass!="" AND $pass_confirm!=""){

//img
if($arquivo01_nome!=""){
if($linedpu['avatar']!=""){
unlink("uploads/usuarios/".$linedpu['avatar']."");
}
//
require"img-pq.php";	
//
$cadast="UPDATE tbl_usuarios SET avatar='".$avatar."' WHERE id='".$dadosla['id']."' AND email='".$dadosla['email']."' AND pass='".$dadosla['pass']."'";
$query=$mysqli->query($cadast);
}

$cadast="UPDATE tbl_usuarios SET nome='".$nome."',descricao='".$descricao."',facebook='".$facebook."',twitter='".$twitter."',linkedin='".$linkedin."',email='".$email."',telefone='".$telefone."',celular='".$celular."',cpf_cnpj='".$cpf_cnpj."',estado='".$estado."',cidade='".$cidade."',pass='".md5($pass)."',s_v='".$pass."' WHERE id='".$dadosla['id']."' AND email='".$dadosla['email']."' AND pass='".$dadosla['pass']."'";
$query=$mysqli->query($cadast);

//email para o usuário
require"email.php";	

$msgsperf='<div class="alert-box success"><i class="fa fa-check icon"></i> Cadastrado alterado com sucesso!</div>';
header("Refresh:3; url=meu-perfil");
}

?>