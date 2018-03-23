<?php
//lista depoimentos

$area=$mysqli->real_escape_string(strip_tags(trim($_GET['area'])));
$pesq=$mysqli->real_escape_string(strip_tags(trim($_POST['pesq'])));
$action=$mysqli->real_escape_string(strip_tags(trim($_GET['action'])));
$enviopesq=$mysqli->real_escape_string(strip_tags(trim($_POST['enviopesq'])));

if($enviopesq==""){
$lista="SELECT id_cod,nome,profissao,status,avatar from tbl_depoimentos ORDER BY nome asc";
$query=$mysqli->query($lista);
$row=$query->num_rows;
}elseif($enviopesq=="s"){
$lista="SELECT id_cod,nome,profissao,status,avatar from tbl_depoimentos WHERE nome like'%".$pesq."%' OR profissao like'%".$pesq."%' ORDER BY nome asc";
$query=$mysqli->query($lista);
$row=$query->num_rows;
}

//deletar registro
if($action=="delete"){
$listad="SELECT id_cod,avatar from tbl_depoimentos WHERE id_cod='".$area."'";
$queryd=$mysqli->query($listad);
$lined=$queryd->fetch_array();

//deletar avatar
if($lined['avatar']!=""){
unlink("../../../uploads/depoimentos/".$lined['avatar']."");
}

//deleta
$sqld="DELETE FROM tbl_depoimentos WHERE id_cod='".$area."'";
$queryd=$mysqli->query($sqld);

//direciona
header("Location: index.php");
}	

?>